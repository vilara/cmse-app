<?php

namespace App\Http\Livewire\Model\User;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class Lista extends Component
{

    use WithPagination;

    public $headers;
    public $sortColumn = 'created_at';
    public $sortDirection = 'asc';
    public $searchTerm;

    public function headerConfig()
    {
        return [
            'id' => 'id',
            'name' => 'Login',
            'email' => 'Email',
            'created_at' => 'Criado'
        ];
    }

    public function mount()
    {
        $this->headers = $this->headerConfig();
        // $this->nome = $nome;
    }



    public function sort($column)
    {
        $this->sortColumn = $column;
        $this->sortDirection = $this->sortDirection == 'asc' ? 'desc' : 'asc';
    }

    private function resultData()
    {
        return User::search('Marcelo')->paginate(10);
        /* return User::where(function ($query) {
            $query->where('name', '!=', 't');
            if ($this->searchTerm != "") {
                $query->where('name', 'like', '%' . $this->searchTerm . '%');
                $query->orWhere('email', 'like', '%' . $this->searchTerm . '%');
            }
        })->orderBy($this->sortColumn, $this->sortDirection)->paginate(15); */
    }

    public function render()
    {
        return view('livewire.model.user.lista', ['data' => $this->resultData()]);
    }
}
