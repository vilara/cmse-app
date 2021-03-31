<?php

namespace App\Http\Livewire\Pages;

use App\Models\User;
use Livewire\Component;

class UserCounter extends Component
{

    public $userAmount;


    public function mount(){
        $this->userAmount = $this->incrementUser();
    }

    public function incrementUser(){
      return  $this->userAmount = User::count();
    }

  
    public function render()
    {
        return view('livewire.pages.user-counter', ['userAmount']);
    }
}
