<?php

namespace  Serrexlabs\Cqrs\Console\Commands;

use Illuminate\Console\GeneratorCommand;
use Illuminate\Support\Str;

class ModuleMakeCommand extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:module';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Make module in root level';

    /**
     * @var array
    */
    protected $folderStructure = [
        'Command/Handlers',
        'Query/Handlers',
        'Repository/Contracts',
        'Exceptions',
    ];

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $moduleName = $this->ask('Please specify the module name [Root\\ <module-name>]');
        foreach ($this->folderStructure as $folder) {
           $this->makeDirectory($this->getFolderPath($moduleName, $folder));
        }
    }

    /**
     * @param string $module
     * @param string $folderPath
     * @return string
     */
    private function getFolderPath($module, $folderPath)
    {
        return $this->getPath($module).$folderPath."/.gitkeep";
    }

    protected function getPath($fqns)
    {
        return $this->laravel['path.base'].'/src/'.str_replace('\\', '/', $fqns).'/';
    }

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        // TODO: Implement getStub() method.
    }

}
