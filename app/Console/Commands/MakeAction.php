<?php

namespace App\Console\Commands;

use Illuminate\Console\GeneratorCommand;

class MakeAction extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:action {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new action class.';

    protected $type = 'Action';

    protected function buildClass($name)
    {
        $stub = $this->files->get($this->getStub());
        $stub = $this->replaceNamespace($stub, $name);

        return $this->replaceClass($stub, $name);
    }

    protected function getStub()
    {
        return base_path('stubs/action.stub');
    }

    protected function getDefaultNamespace($rootNamespace) : string
    {
        return $rootNamespace . '\Actions';
    }

    protected function replaceNamespace(&$stub, $name) : string
    {
        return str_replace(
            $this->getDefaultNamespace("App") . "\\{{namespace_end}}",
            $this->getNamespace($name),
            $stub
        );
    }

    protected function replaceClass($stub, $name) : string
    {
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);

        return str_replace('{{action_name}}', $class, $stub);
    }
}
