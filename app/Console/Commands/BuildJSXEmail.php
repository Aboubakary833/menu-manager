<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\Process;
use Illuminate\Support\Str;
use SplFileInfo;

class BuildJSXEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'jsx_email:build
                                            {name : Name of the Component}
                                            {--outName= : Output file name}
                                            {--outDir= : Sub directory inside mails directory}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Build a JSX Email template';

    protected string $componentsDir = "resources/ts/emails/templates";

    protected string $outDir = "resources/views/mails";

    protected array $componentsRegistry;

    public function __construct(
        protected Filesystem $filesystem,
    ) {
        parent::__construct();
        $files = $this->filesystem->files(
        base_path($this->componentsDir)
      );
        $this->componentsRegistry = $this->getComponentsNames($files);
    }

    /**
     * Execute the console command.
     */
    public function handle() : void
    {
        if (!$this->componentExist())
            return;
        $filename = $this->getArgument() . ".tsx";
        if (!$this->buildTemplate($filename))
            $this->error("Error during the JSX Email template build");
        $this->moveContent($filename);
    }

    public function getArgument() : string
    {
        return $this->argument("name");
    }

    /**
     * @param SplFileInfo[] $files
     * @return array<string>
     */
    public function getComponentsNames(array $files) : array
    {
        return array_map(
            fn(SplFileInfo $file) => str_replace(".tsx", '', $file->getFilename()),
            $files
        );
    }

    public function componentExist() : bool
    {
        $argument = $this->getArgument();
        if (!in_array($argument, $this->componentsRegistry))
        {
            $this->error(
                sprintf("Component \"%s\" not found in %s.", $argument, $this->componentsDir)
            );
            return false;
        }
        return true;
    }

    public function buildTemplate(string $filename) : bool
    {
        $fullPath = $this->componentsDir . "/" . $filename;
        $tempDir = $this->getTmpDir();
        if (!$this->filesystem->isDirectory($tempDir))
            $this->filesystem->makeDirectory($tempDir);
        $output = Process::path(base_path())->run(
            sprintf(
                "email build %s --pretty --out=%s",
                $fullPath,
                $tempDir
            )
        );
        return $output->successful();
    }

    public function moveContent() : void
    {
        $tmpDir = $this->getTmpDir();
        $name = $this->getArgument();
        $outName = $this->getOutputFileName();
        $subDir = $this->getOutputDir();
        $outDir = $this->outDir;
        if ($subDir)
        {
            $outDir .= '/' . $subDir;
            $this->filesystem->makeDirectory(
                $outDir,
                recursive: true,
            );
        }
        if (Str::endsWith($subDir, '/'))
            $subDir = Str::replaceLast('/', '', $subDir);
        try {
            $fileContent = $this->filesystem->get(
                sprintf("%s/%s.html", $tmpDir, $name)
            );
            $this->filesystem->put(
                sprintf("%s/%s.blade.php", $outDir, Str::snake($outName ?? $name)),
                $fileContent
            );
        } catch (FileNotFoundException $exception)
        {
            $this->error(
                sprintf("Build file not found: \"%s.html\"", $name)
            );
        }

        $this->filesystem->delete(
            sprintf("%s/%s.html", $tmpDir, $name)
        );

    }

    public function getTmpDir() : string
    {
        return sprintf("%s/temp", $this->componentsDir);
    }

    public function getOutputDir() : string | null
    {
        return $this->option("outDir");
    }

    public function getOutputFileName() : string | null
    {
        return $this->option("outName");
    }
}
