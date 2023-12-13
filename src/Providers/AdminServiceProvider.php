<?php

namespace Bigraja\Admin\Providers;

use Bigraja\Admin\View\Components\Layout;
use Bigraja\Admin\View\Components\Table;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Blade;


class AdminServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../../config.php', 'admin');
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
        Blade::component('resources-table', Table::class);
    }

    /**
     * load routes
     *
     * @return void
     */
    public function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__ . '/../../web.php');
        });
    }
}