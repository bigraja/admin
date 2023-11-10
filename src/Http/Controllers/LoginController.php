<?php

namespace Bigraja\Admin\Http\Controllers;

use Illuminate\View\View;

class LoginController
{

    function show(): View
    {
        return view("admin::login");
    }

    function login()
    {
    }
}
