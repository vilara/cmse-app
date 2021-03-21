<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class Teste extends Component
{

    public $modalFormVisible = false;

    public function createShowModal(){
        $this->modalFormVisible = true;
    }
    public function render()
    {
        return view('livewire.pages.teste');
    }
}
