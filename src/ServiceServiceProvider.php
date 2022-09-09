<?php

namespace Stsp\LaravelService;

use Illuminate\Support\ServiceProvider;
use Stsp\LaravelRepository\Console\ServiceMakeCommand;

class ServiceServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton(
            'command.laravel-service.make',
            function ($app) {
                return new ServiceMakeCommand($app['files']);
            }
        );

        $this->commands('command.laravel-service.make');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
    }
}
