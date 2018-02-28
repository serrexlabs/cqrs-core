<?php

namespace  Serrexlabs\Cqrs\Console\Commands;



class RepositoryMakeCommand extends RootGeneratorCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'make:repository';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new repository class';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Repository';

    public function handle()
    {
        parent::handle();

//        $this->call('make:repository-interface', [
//            'name' => $this->argument('name')."Interface"
//        ]);
    }
    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__ . '/stubs/repository.stub';
    }

    protected function getEntityNamespace()
    {
        return  '\Repository';
    }
}
