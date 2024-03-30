<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Category extends Component
{
    /**
     * Create a new component instance.
     */
    public $name;
    public $amount;
    public $bg;
    public $img;

    public function __construct($name, $amount, $bg, $img)
    {
        //
        $this->name = $name;
        $this->amount = $amount;
        $this->bg = $bg;
        $this->img = $img;
        

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.category');
    }
}