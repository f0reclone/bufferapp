<?php

namespace Scottybo\BufferApp;

use Illuminate\Support\ServiceProvider;

class BufferAppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(BufferApp::class, function () {
            return new BufferApp();
        });
        $this->app->alias(BufferApp::class, 'laravel-buffer-app');
    }
}