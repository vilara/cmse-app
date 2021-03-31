<?php

namespace App\Http\Livewire\Model\User;

use Livewire\Component;

use Livewire\WithPagination;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class LiveTable extends Component
{

    use WithPagination;
    public $userId;

    public $isActive;
    public $headers;
    public $sortColumn = 'created_at';
    public $sortDirection = 'asc';
    public $searchTerm;
    public $modalFormVisible;
    public $user;

    protected $listeners = ['hiddenShowModal', 'triggerRefresh' => '$refresh'];


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


    public function createShowModal()
    {
        $this->modalFormVisible = true;
    }

    public function editUser($id){
        $this->userId = $id;
        $this->modalFormVisible = true;
        $this->emit('editarUserForm', $id);
      
    }

    public function removeUser($id){
        $this->emit('removeUser', $id);
      
    }

    public function hiddenShowModal()
    {

        $this->emit('limparForm');
        $this->modalFormVisible = false;
    }


    public function mount()
    {
        $this->modalFormVisible = 0;
        $this->headers = $this->headerConfig();
    }



    public function sort($column)
    {
        $this->sortColumn = $column;
        $this->sortDirection = $this->sortDirection == 'asc' ? 'desc' : 'asc';
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

        $users =  User::search($this->searchTerm)
        
        ->when($this->isActive, function ($query) {
            return $query->active();
        })
        ->orderBy($this->sortColumn, $this->sortDirection)->paginate(10);

        return view('livewire.model.user.live-table', ['users' => $users]);
    }
}
