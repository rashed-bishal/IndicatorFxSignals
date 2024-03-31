<?php

namespace App\View\Components\image;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class roundedImage extends Component
{
    public string $src;
    /**
     * Create a new component instance.
     */
    public function __construct(string $src)
    {
        $this->src = $src;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.image.rounded-image');
    }
}
