<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Venobox extends Component
{

    public $big,$small,$gall;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($big,$small,$gall)
    {
        $this->big=$big;
        $this->gall=$gall;
        $this->small=$small;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.venobox');
    }
}
