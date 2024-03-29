<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Product extends Component
{
    /**
     * Create a new component instance.
     */
    public $tag;
    public $img;
    public $name;
    public $rate;
    public $desc;
    public $sellprice;
    public $disPercent;
    public $disPrice;
    public $tagcol;
    public function __construct($tag, $img, $name, $rate, $desc, $sellprice, $disPercent, $disPrice, $tagcol)
    {
        $this->tag = $tag;
        $this->img = $img;
        $this->name = $name;
        $this->rate = $rate;
        $this->desc = $desc;
        $this->sellprice = $sellprice;
        $this->disPercent = $disPercent;
        $this->disPrice = $disPrice;
        $this->tagcol = $tagcol;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.product');
    }
}
