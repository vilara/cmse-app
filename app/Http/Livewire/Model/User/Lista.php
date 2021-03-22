<?php

namespace App\Http\Livewire\Model\User;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;

class Lista extends Component
{

    use WithPagination;

    public $headers;

    private function headerConfig(){
        return [
            'id' => '#',
            'name' => 'Login',
            'email' => 'Email',
        ];
    }

    public function mount(){
        $this->headers = $this->headerConfig();
    }

    public function resultData(){
        return User::all();
    }

    public function render()
    {
        return view('livewire.model.user.lista', ['data' => $this->resultData()]);
    }
}
