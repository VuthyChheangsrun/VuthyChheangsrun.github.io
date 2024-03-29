<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Promo extends Component
{
    /**
     * Create a new component instance.
     */
    public $text;
    public $bg;
    public $bbg;
    public $img;
    
    public function __construct($text, $bg, $bbg, $img)
    {
        $this->text = $text;
        $this->bg = $bg;
        $this->bbg = $bbg;
        $this->img = $img;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.promo');
    }
}
