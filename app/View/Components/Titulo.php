<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Titulo extends Component
{

    public $nome;
    public $type;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($nome, $type)
    {
        $this->nome = $nome;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.titulo');
    }
}
