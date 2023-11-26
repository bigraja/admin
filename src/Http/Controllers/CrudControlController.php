<?php

namespace Bigraja\Admin\Http\Controllers;

use Illuminate\Database\Eloquent\Model;

class CrudControlController
{
    public $route_name;
    public $model;

    function index()
    {
        if (count($this->tbody()) == count($this->thead())) {
            return view("admin::crud.index")
                ->with("model", $this->model::all())
                ->with('table_column', $this->table_column())
                ->with('route_name', $this->route_name);
        }
    }

    function show($id)
    {
        $model = $this->model::find($id);

        return view('admin::crud.show')
            ->with('model', $model)
            ->with('show_data', $this->show_data());
    }

    function show_data()
    {
        return [
            'name' => "Name",
            'email' => "Mobile",
            'mobile' => "Email",
        ];
    }

    function table_column()
    {
        return [
            'name' => "Name",
            'email' => "Mobile",
            'mobile' => "Email",
        ];
    }

}
