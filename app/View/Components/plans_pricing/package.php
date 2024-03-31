<?php

namespace App\View\Components\plans_pricing;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class package extends Component
{
    public string $pack, $title, $price, $href;
    /**
     * Create a new component instance.
     */
    public function __construct(string $pack, string $title, string $price, string $href)
    {
        $this->pack = $pack;
        $this->title = $title;
        $this->price = $price;
        $this->href = $href;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.plans_pricing.package');
    }
}
