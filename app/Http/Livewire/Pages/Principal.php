<?php

namespace App\Http\Livewire\Pages;

use App\Models\User;
use Livewire\Component;

class Principal extends Component
{


    protected $listeners = ['updateUser' => 'render'];

    public function mount(){
       
       
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
