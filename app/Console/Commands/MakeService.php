<?php

namespace App\Console\Commands;

use Illuminate\Console\GeneratorCommand;

class MakeService extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:service {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new service class.';

    protected $type = 'Service';

    protected function buildClass($name)
    {
        $stub = $this->files->get($this->getStub());
        $stub = $this->replaceNamespace($stub, $name);

        return $this->replaceClass($stub, $name);
    }

    protected function getStub()
    {
        return base_path('stubs/service.stub');
    }

    protected function getDefaultNamespace($rootNamespace) : string
    {
        return $rootNamespace . '\Services';
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

        return str_replace('{{service_name}}', $class, $stub);
    }
}
