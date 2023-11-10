<?php

namespace Bigraja\Admin\View\Composers;

use Illuminate\View\View;

class AdminLayoutComposer
{

    static array $side_nav_item;

    /**
     * Create a new admin::layout composer.
     */
    public function __construct()
    {
    }

    /**
     * Bind data to the view.
     */
    public function compose(View $view): void
    {
    }
}
