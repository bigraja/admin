<?php

namespace Bigraja\Admin;

use Bigraja\Admin\View\Components\Layout;
use Bigraja\Admin\View\Components\Table;
use Bigraja\Admin\View\Composers\AdminLayoutComposer;
use Illuminate\Contracts\Foundation\CachesConfiguration;
use Illuminate\Foundation\Console\AboutCommand;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;

class AdminServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config.php', 'admin');
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
            $this->loadRoutesFrom(__DIR__ . '/../web.php');
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
            "middleware" => config('admin.middleware'),
            'as' => 'admin.'
        ];
    }
}