<?php

namespace Bigraja\Admin\Http\Controllers;

use Illuminate\Database\Eloquent\Model;

class CrudControlController
{
    public $route_name;

    function index()
    {
        if (count($this->tbody()) == count($this->thead())) {
            return view("admin::crud.index")
                ->with("model", $this->model())
                ->with('thead', $this->thead())
                ->with('tbody', $this->tbody())
                ->with('action', $this->action());
        }
    }

    function action()
    {
        return [
            "Preview" => ["name" => $this->route_name . "show", "params" => ["id"]],
        ];
    }

    function thead()
    {
        return [];
    }

    function tbody()
    {
        return [];
    }

}
