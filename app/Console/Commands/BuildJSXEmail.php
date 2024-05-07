<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Arr;
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
    protected $signature = "jsx_email:build
                                            {name : Name of the Component}
                                            {--outName= : Output file name}
                                            {--outDir= : Sub directory inside mails directory}";

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "Build a JSX Email template";

    protected string $componentsDir = "resources/ts/emails/templates";

    protected string $outDir = "resources/views/mails";

    protected array $componentsRegistry = [];

    public function __construct(
        protected Filesystem $filesystem,
    ) {
        parent::__construct();
    }

    /**
     * Initialize the registry
     * @return void
     */
    public function init(): void
    {
        if (!$this->filesystem->exists($this->componentsDir))
            return;
        $files = $this->recursivelyGetAllFiles($this->componentsDir);
        $components = $this->getComponents($files);
        $this->componentsRegistry = $components;
    }

    /**
     * Execute the console command.
     */
    public function handle() : void
    {
        $this->init();
        $this->checkIfComponentExist();
        $filename = $this->getArgument();
        if (!$this->buildTemplate($filename))
            $this->error("Error during the JSX Email template build.");
        $this->withProgressBar(100, fn() => $this->moveContent());
        $this->info(
            sprintf("\n%s built successfully.", $this->getArgument())
        );
    }

    public function getArgument() : string
    {
        return $this->argument("name");
    }

    /**
     * @param SplFileInfo[] $files
     * @return array<string>
     */
    public function getComponents(array $files) : array
    {
        $components = [];
        foreach ($files as $file)
        {
            $name = str_replace(".tsx", '', $file->getFilename());
            $components[$name] = sprintf(
                "%s/%s",
                $file->getPath(),
                $file->getFilename()
            );
        }

        return $components;
    }

    public function checkIfComponentExist() : void
    {
        $argument = $this->getArgument();
        if (!in_array($argument, array_keys($this->componentsRegistry)))
        {
            $this->error(
                sprintf("Component \"%s\" not found in %s.", $argument, $this->componentsDir)
            );
        }
    }

    public function buildTemplate(string $filename) : bool
    {
        $fullPath = $this->componentsRegistry[$filename];
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
        $outDir = base_path($this->outDir);
        if ($subDir)
        {
            if (Str::endsWith($subDir, '/'))
                $subDir = Str::replaceLast('/', '', $subDir);
            $outDir .= '/' . $subDir;
            if (!$this->filesystem->exists($outDir))
            {
                $this->filesystem->makeDirectory(
                    $outDir,
                    recursive: true,
                );
            }
        } else {
            $pathFromComPath = Str::replace(
                base_path($this->componentsDir),
                "",
                $this->componentsRegistry[$name]
            );
            $subDir = Str::replace(
                sprintf("/%s.tsx", $name),
                "",
                $pathFromComPath
            );
            if ($subDir)
            {
                $outDir .= $subDir;
                if (!$this->filesystem->exists($outDir))
                {
                    $this->filesystem->makeDirectory(
                        $outDir,
                        recursive: true,
                    );
                }
            }
        }
        try {
            $fileContent = $this->filesystem->get(
                sprintf("%s/%s.html", $tmpDir, $name)
            );
            $this->filesystem->put(
                sprintf("%s/%s.blade.php", $outDir, Str::snake(strtolower($outName ?? $name))),
                $fileContent
            );
        } catch (FileNotFoundException $exception)
        {
            $this->error(
                sprintf("Build file not found: \"%s.html\".", $name)
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

    /**
     * Recursively get all files from a directory and its sub directories
     * @param string $root
     * The root directory.
     * @return void
     */
    public function recursivelyGetAllFiles(string $root) : array
    {
        if (!Str::startsWith($root, base_path()))
            $root = base_path($root);
        $files = $this->filesystem->files($root);
        $subDirs = $this->filesystem->directories($root);
        if (count($subDirs))
        {
            foreach ($subDirs as $dir)
                $files[] = $this->recursivelyGetAllFiles($dir);
        }

        return Arr::flatten($files);
    }
}
