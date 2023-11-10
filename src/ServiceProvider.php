<?php

namespace Bigraja\Admin;

use Bigraja\Admin\View\Components\Layout;
use Bigraja\Admin\View\Composers\AdminLayoutComposer;
use Illuminate\Contracts\Foundation\CachesConfiguration;
use Illuminate\Foundation\Console\AboutCommand;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider as MainServiceProvider;


class ServiceProvider extends MainServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'admin');
        $this->addSideNavItems(['Dashboard' => ['more' => ['Hom' => '/home', 'Page' => '/page']]]);
    }

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerRoutes();
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'admin');
        Blade::component('admin-layout', Layout::class);
    }

    /**
     * load routes
     *
     * @return void
     */
    public function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        });
    }

    /**
     * group route prefix and middeware
     *
     * @return array
     */
    public  function routeConfiguration(): array
    {
        return [
            "prefix" => config('admin.prefix'),
            "middleware" => ['web']
        ];
    }

    /**
     * Merge the given nav items.
     *
     * @param  array  $navItems
     */
    public function addSideNavItems(array $navItems)
    {
        if (!($this->app instanceof CachesConfiguration && $this->app->configurationIsCached())) {
            $config = $this->app->make('config');
            $key = 'admin.side_nav';
            $config->set($key, array_merge(
                $navItems,
                $config->get($key, [])
            ));
        }
    }
}
