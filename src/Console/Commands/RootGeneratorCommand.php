<?php

namespace  Serrexlabs\Cqrs\Console\Commands;

use Illuminate\Console\GeneratorCommand;

abstract class RootGeneratorCommand extends GeneratorCommand
{
    /**
     * @var string
     */
    protected $module;

    public function handle()
    {
        $this->module = $this->ask('Under which module? [Root\\Example]');

        parent::handle();

    }

    protected function getPath($name)
    {
        return $this->laravel['path.base'].'/src/'.str_replace('\\', '/', $name).".php";
    }

    protected function qualifyClass($name)
    {
        return $this->rootNamespace().$this->getEntityNamespace()."\\".$name;
    }

    /**
     * Get the root namespace for the class.
     *
     * @return string
     */
    protected function rootNamespace()
    {
        return $this->module;
    }

    abstract protected function getEntityNamespace();
}
