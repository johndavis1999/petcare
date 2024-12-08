<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Marca; 

class Slider extends Component
{
    public $items;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        // Realiza la consulta directamente al modelo
        $this->items = Marca::where('estado', 1)->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.slider');
    }
}
