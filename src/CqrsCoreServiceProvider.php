<?php

namespace Serrexlabs\Cqrs;

use Illuminate\Support\ServiceProvider;
use Serrexlabs\Cqrs\Console\Commands\CommandHandlerMakeCommand;
use Serrexlabs\Cqrs\Console\Commands\CommandMakeCommand;
use Serrexlabs\Cqrs\Console\Commands\InitProjectCommand;
use Serrexlabs\Cqrs\Console\Commands\ModelMakeCommand;
use Serrexlabs\Cqrs\Console\Commands\QueryHandlerMakeCommand;
use Serrexlabs\Cqrs\Console\Commands\QueryMakeCommand;
use Serrexlabs\Cqrs\Console\Commands\RepositoryInterfaceMakeCommand;
use Serrexlabs\Cqrs\Console\Commands\RepositoryMakeCommand;
use Serrexlabs\Cqrs\Console\Commands\TransformerMakeCommand;

class CqrsCoreServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                CommandHandlerMakeCommand::class,
                CommandMakeCommand::class,
                InitProjectCommand::class,
                ModelMakeCommand::class,
                ModelMakeCommand::class,
                QueryHandlerMakeCommand::class,
                QueryMakeCommand::class,
                RepositoryInterfaceMakeCommand::class,
                RepositoryMakeCommand::class,
                TransformerMakeCommand::class,
            ]);
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
