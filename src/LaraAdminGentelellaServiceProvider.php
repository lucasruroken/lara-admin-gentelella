<?php

namespace LucasRuroken\LaraAdmin\Gentelella;

use Illuminate\Support\ServiceProvider;

class LaraAdminGentelellaServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerAssets();
        $this->registerViews();
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

    private function registerAssets()
    {
        $this->publishes([
            __DIR__.'/assets' => public_path('vendor/gentelella'),
        ], 'lara-admin-gentelella');
    }

    private function registerViews()
    {
        $this->loadViewsFrom(__DIR__ . '/Views', 'gentelella');
    }
}
