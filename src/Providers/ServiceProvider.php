<?php

namespace Bigraja\Admin\Providers;

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
     * group route prefix and middeware
     *
     * @return array
     */
    public function routeConfiguration(): array
    {
        return [
            "prefix" => config('admin.prefix'),
            "middleware" => config('admin.middleware'),
            'as' => 'admin.'
        ];
    }
}
