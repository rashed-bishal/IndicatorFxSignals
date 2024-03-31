<?php

namespace App\View\Components\faq;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class panel extends Component
{
    public string $question, $answer;
    /**
     * Create a new component instance.
     */
    public function __construct(string $question, string $answer)
    {
        $this->question = $question;
        $this->answer = $answer;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.faq.panel');
    }
}
