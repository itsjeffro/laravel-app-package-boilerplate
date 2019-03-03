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
        $this->loadViewsFrom(
            __DIR__ . '/../resources/views', 'example'
        );
    }
    
    /**
     * Register routes.
     * 
     * @return void
     */
    protected function registerRoutes()
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
    protected function routeConfiguration(): array
    {
        return [
            'namespace' => 'Example\Http\Controllers',
            'prefix' => '/',
        ];
    }
}
