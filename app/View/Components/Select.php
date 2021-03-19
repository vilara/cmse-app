<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Select extends Component
{
    public $disabled;
    public $arra;
    public $ref;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($disabled, $arra, $ref)
    {
        $this->disabled = $disabled;
        $this->arra = $arra;
        $this->ref = $ref;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.select');
    }
}
