<?php

namespace App\View\Components\Dashboard;

use Illuminate\View\Component;
use App\Models\FooterSocialLinks;

class Footer extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public function __construct()
    {

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */

    public function render()
    {

        return view('components.dashboard.footer');
    }
}
