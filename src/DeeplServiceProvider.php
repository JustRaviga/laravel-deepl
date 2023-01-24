<?php

namespace JustRaviga\Deepl;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use JustRaviga\Deepl\Commands\SyncCommand;

final class DeeplServiceProvider extends BaseServiceProvider
{
    /**
     * Boot publishable resources
     */
    public function boot(): void
    {
        $this->bootPublishes();
    }

    /**
     * Register package resources
     */
    public function register(): void
    {
        $this->registerConfig();
        $this->registerFacade();
        $this->registerCommands();
    }

    /**
     * Boot publishable resources
     */
    protected function bootPublishes(): void
    {
        $this->publishes([
            __DIR__ . '/../config/deepl.php' => $this->app->configPath('deepl.php'),
        ], 'config');
    }

    /**
     * Register related config
     */
    protected function registerConfig(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/deepl.php', 'deepl');
    }

    /**
     * Register related facade
     */
    protected function registerFacade(): void
    {
        $this->app->bind('deepl', function ($app) {
            return new Deepl();
        });
    }

    /**
     * Register related commands
     */
    protected function registerCommands(): void
    {
        $this->commands([
            SyncCommand::class,
        ]);
    }
}
