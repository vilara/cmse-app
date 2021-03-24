<?php

namespace App\Http\Livewire\Model\User;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class Lista extends Component
{

    use WithPagination;

    public $isActive;
    public $headers;
    public $sortColumn = 'created_at';
    public $sortDirection = 'asc';
    public $searchTerm;

    protected $queryString = [
        'isActive' => ['except' => false],
        'searchTerm'  => ['except' => ''],
        'sortColumn' => ['except' => 'created_at'],
    ];

    public function headerConfig()
    {
        return [
            'id' => 'id',
            'name' => 'Login',
            'email' => 'Email',
            'created_at' => 'Criado',
            'action' => 'Action'
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
        //  return User::search('Marcelo')->paginate(10);


        return User::where('name', '!=', 't')
            ->when($this->searchTerm, function ($query) {
                $query->where('name', 'like', '%' . $this->searchTerm . '%')
                ->orWhere('email', 'like', '%' . $this->searchTerm . '%');
            })
            ->when($this->isActive, function ($query) {
                return $query->active();
            })
            ->orderBy($this->sortColumn, $this->sortDirection)->paginate(15);
    }

    public function updatingIsActive()
    {
        $this->resetPage();
    }
    public function updatingSearchTerm()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.model.user.lista', ['data' => $this->resultData()]);
    }
}
