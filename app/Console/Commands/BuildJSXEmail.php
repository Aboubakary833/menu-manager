<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\Process;
use SplFileInfo;

class BuildJSXEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'jsx_email:build {name}';

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
        $filename = $this->argument("name") . ".tsx";
        $this->buildTemplate($filename);
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
        $argument = $this->argument("name");
        if (!in_array($argument, $this->componentsRegistry))
        {
            $this->error(
                sprintf("Component \"%s\" not found in %s.", $argument, $this->componentsDir)
            );
            return false;
        }
        return true;
    }

    public function buildTemplate(string $filename) : void
    {
        $fullPath = $this->componentsDir . "/" . $filename;
        $tempDir = sprintf("%s/temp", $this->componentsDir);
        if (!$this->filesystem->isDirectory($tempDir))
            $this->filesystem->makeDirectory($tempDir);
        $output = Process::path(base_path())->run(
            sprintf(
                "email build %s --pretty --out=%s",
                $fullPath,
                $tempDir
            )
        );
        if (!$output->successful())


    }
}
