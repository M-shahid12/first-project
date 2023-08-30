<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Hader extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $kharal;
    public function __construct($componentName)
    {
        //
        $this->kharal = $componentName;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.hader');
    }
}
