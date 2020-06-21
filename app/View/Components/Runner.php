<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Runner extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $runners;

    public function __construct($runners)
    {
        $this->runners = $runners;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.runner');
    }
}
