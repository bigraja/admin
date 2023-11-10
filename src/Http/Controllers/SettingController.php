<?php

namespace Bigraja\Admin\Http\Controllers;

class SettingController
{

    function general()
    {
        return view("admin::setting.general", [

            'form' => [view('admin::f.input')]

        ]);
    }
}
