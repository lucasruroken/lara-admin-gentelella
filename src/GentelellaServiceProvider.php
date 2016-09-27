<?php

namespace LucasRuroken\LaraAdmin\Gentelella;

use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;
use LucasRuroken\LaraAdmin\Builders\MenuBuilder;

class GentelellaServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // Nothing here...
    }

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishAssets();
        $this->registerViews();
        $this->registerComposers();
    }

    private function publishAssets()
    {
        $assets = [
            __DIR__.'/../../../bower-asset/gentelella/build/css/custom.min.css'     => [public_path('assets/css/custom.min.css'), 'lara-admin-gentelella-assets'],
            __DIR__.'/../../../bower-asset/gentelella/build/js/custom.min.js'       => [public_path('assets/js/custom.min.js'), 'lara-admin-gentelella-assets'],
            __DIR__.'/../../../bower-asset/gentelella/vendors'                      => [public_path('assets/vendor'), 'lara-admin-gentelella-assets'],
            __DIR__.'/../../../bower-asset/gentelella/production/images'            => [public_path('assets/images'), 'lara-admin-gentelella-assets']
        ];

        foreach($assets AS $path => $values)
        {
            $this->publishes([$path => $values[0]], $values[1]);
        }
    }

    private function registerViews()
    {
        $this->loadViewsFrom(__DIR__ . '/views', 'gentelella');

        $this->publishes([
            __DIR__.'/views' => resource_path('views/vendor/gentelella'),
        ], 'lara-admin-gentelella-views');
    }

    public function registerComposers()
    {
        $menuBuilder = file_exists(config_path('lara-admin-menu.php')) ? config('lara-admin-menu.menu-builder') : new MenuBuilder();
        view()->composer('gentelella::modules.sidebar', function(View $view) use ($menuBuilder) {

            return $view->with('menuBuilder', $menuBuilder);
        });
    }
}