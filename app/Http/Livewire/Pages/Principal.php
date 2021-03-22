<?php

namespace App\Http\Livewire\Pages;

use App\Models\User;
use Livewire\Component;

class Principal extends Component
{

    public $nr;
    

    public function mount(){
       $this->nr = User::all()->count();
    }

    public function cadastroForm(){
        return redirect('users/create');
    }
    
    public function ListaUsers(){
        return redirect('users');

    }

   
   
    public function render()
    {
        return view('livewire.pages.principal');
    }
}
