<?php

namespace App\Http\Livewire\Model;

use App\Models\Cargo;
use App\Models\Detail;
use App\Models\Om;
use App\Models\Section;
use Livewire\Component;

class User extends Component
{

    public $show = true;
    public $oms;
    public $cargos;
    public $sections;

    public function mount(User $user, Detail $detail)
    {
        
        $this->user = $user;
        $this->detail = $detail;
        $this->oms = Om::all();
        $this->cargos = Cargo::all();
        $this->sections = Section::all();
    }

    
     
    /**
     * Classe para mostrar a view do livewire do modelo de usuário
     *
     * @return void
     */
    public function render()
    {
        return view('livewire.model.user');
    }
}
