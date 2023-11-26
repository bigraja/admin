<?php

namespace Bigraja\Admin\Http\Controllers;

class DashboardController
{

    function index()
    {
        return view("admin::dashboard");
    }
}
