<?php

namespace Bigraja\Admin\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class Layout extends Component
{
    /**
     * Create the component instance.
     */
    public function __construct()
    {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('admin::layout')
            ->with('sidenavs', config('admin.side_nav'));
    }
}
