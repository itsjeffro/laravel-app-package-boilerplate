<?php

namespace Example;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class ExampleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any package services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerRoutes();
        $this->registerPublishing();

        $this->loadViewsFrom(
            __DIR__ . '/../resources/views', 'example'
        );
    }
    
    /**
     * Register routes.
     * 
     * @return void
     */
    private function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__ . '/Http/routes.php');
        });
    }
    
    /**
     * Route configuration.
     * 
     * @return array
     */
    private function routeConfiguration(): array
    {
        return [
            'namespace' => 'Example\Http\Controllers',
            'prefix' => '/',
        ];
    }
    
    
    /**
     * Register publishing.
     *
     * @return void
     */
    private function registerPublishing()
    {
        if ($this->app->runningInConsole()) {
            // Assets
            $this->publishes([
                __DIR__.'/../public' => public_path('vendor/example'),
            ], 'example-assets');
            
            // Config
            $this->publishes([
                __DIR__.'/../config/example.php' => config_path('example.php'),
            ], 'example-config');
        }
    }
}
