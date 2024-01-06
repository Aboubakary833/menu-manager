<?php

namespace App\Console\Commands;

use Illuminate\Console\GeneratorCommand;

class MakeJSXEMail extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:jsx_email {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new JSX Email component';

    protected $type = "jsx component";

    protected $componentsDir = "resources/ts/emails/templates";

    public function handle()
    {
        $name = $this->getNameInput();
        $path = $this->componentsDir . '/' . $name . '.tsx';
        $content = $this->buildClass($name);
        $this->files->put(
            $path,
            $content
        );

        $this->components->info(sprintf('JSX Email %s [%s] created successfully.', $name, $path));
    }

    protected function buildClass($name)
    {
        $stub = $this->files->get($this->getStub());
        return $this->replaceClass($stub, $name);
    }

    protected function replaceClass($stub, $name)
    {
        return str_replace(
            "{{JSXEmail}}",
            $name,
            $stub
        );
    }

    protected function getStub()
    {
        return base_path("stubs/jsxemail.stub");
    }


}
