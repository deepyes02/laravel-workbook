<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Header extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    // have to declare title as public beforehand otherwise the variable isn't accessible by other functions

    public $title;
    public $siteName;
    public function __construct($title)
    {
        //
        $this->title = $title;
        $this->siteName = "D's Project";
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.header');
    }
}
