<?php

namespace Bigraja\Admin\Http\Controllers;

use Bigraja\Admin\Http\Controllers\CrudControlController;
use Bigraja\Amardriver\Models\Driver;

class DriverController extends CrudControlController
{
    public $route_name = "admin.drivers.";

    function model()
    {
        return Driver::all();
    }

    function thead()
    {
        return [
            "Name",
            "Mobile",
            "Email"
        ];
    }

    function tbody()
    {
        return [
            "name",
            "mobile",
            "email"
        ];
    }
}