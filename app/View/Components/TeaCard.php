<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Tea;

class TeaCard extends Component
{
    public Tea $tea;
    public bool $isHighlighted;
    /**
     * Create a new component instance.
     */
    public function __construct(Tea $tea, bool $isHighlighted = false)
    {
        $this->tea = $tea;
        $this->isHighlighted = $isHighlighted;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.tea-card');
    }

    public function getDiscountFormat(): string
    {
        return $this->tea->discount ? $this->tea->discount . '%' : '';
    }
}
