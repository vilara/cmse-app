<?php

namespace App\Http\Livewire\Model\User;

use Livewire\Component;

use Livewire\WithPagination;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class LiveTable extends Component
{

    use WithPagination;

    public $isActive;
    public $headers;
    public $sortColumn = 'created_at';
    public $sortDirection = 'asc';
    public $searchTerm;
    public $modalFormVisible = false;


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
        ];
    }

    public function createShowModal(){
        $this->modalFormVisible = true;
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


        return User::search($this->searchTerm)
            ->when($this->isActive, function ($query) {
                return $query->active();
            })
            ->orderBy($this->sortColumn, $this->sortDirection)
            ->paginate(10);
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
        return view('livewire.model.user.live-table', ['data' => $this->resultData()]);
    }
}
