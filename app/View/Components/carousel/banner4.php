<?php

namespace App\View\Components\carousel;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class banner4 extends Component
{
    public string $imgsrc;
    /**
     * Create a new component instance.
     */
    public function __construct(string $imgsrc)
    {
        $this->imgsrc = $imgsrc;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.carousel.banner4');
    }
}
