<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ItemCard extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    // public $id;
    // public $name;
    // public $region;
    // public $image;
    // public $desc;

    public function __construct()
    {
        // $this->id = $id;
        // $this->name = $name;
        // $this->region = $region;
        // $this->image = $image;
        // $this->desc = $desc;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.item-card');
    }
}
