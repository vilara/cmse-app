<?php

namespace App\Http\Livewire\Model;

use App\Models\Cargo;
use App\Models\Detail;
use App\Models\Om;
use App\Models\Section;
use App\Models\User as ModelsUser;
use Livewire\Component;

class User extends Component
{

    public $user;
    public $detail;
    public $show = true;
    public $oms;
    public $cargos;
    public $sections;
    public $masculino = true;
    public $feminino = true;

    public function mount(ModelsUser $user, Detail $detail)
    {

        $this->user = $user;
        $this->detail = $detail;
        $this->oms = Om::all();
        $this->cargos = Cargo::all();
        $this->sections = Section::all();
    }

    protected $rules = [
        'user.name' => 'required|string|unique:App\Models\User,name',
        'user.cpf' => 'required|string|size:11|unique:App\Models\User,cpf',
        'user.email' => 'required|email|unique:App\Models\User,email',
        'detail.idt' => 'required',
        'detail.nome_completo' => 'required|string|min:6',
        'detail.sexo' => 'required',
        'detail.dtNasc' => 'required',
        'detail.om_id' => 'required',
        'detail.cargo_id' => 'required',
        'detail.section_id' => 'required',
    ];

    protected $messages = [
        'user.name.required' => 'Esse campo é obrigatório',
        'user.name.min' => 'Mínimo de 6 caracteres',
        'user.name.unique' => 'Este nome já está cadastrado no sistema',
        'user.cpf.required' => 'Esse campo é obrigatório',
        'user.cpf.size' => 'Esse campo deve conter 11 dígitos',
        'user.cpf.unique' => 'Este cpf já está cadastrado no sistema',
        'user.email.required' => 'Esse campo é obrigatório',
        'user.email.email' => 'E-mail inválido',
        'user.email.unique' => 'Este email já está cadastrado no sistema',
        'detail.idt.required' => 'Esse campo é obrigatório',
        'detail.sexo.required' => 'Esse campo é obrigatório',
        'detail.nome_completo.required' => 'Esse campo é obrigatório',
        'detail.dtNasc.required' => 'Esse campo é obrigatório',
        'detail.om_id.required' => 'Esse campo é obrigatório',
        'detail.cargo_id.required' => 'Esse campo é obrigatório',
        'detail.section_id.required' => 'Esse campo é obrigatório',
    ];

    public function cadastrar()
    {
        $this->validate();
        dd($this->user);
        $this->user->save();


        $this->detail->id = User::where('cpf', $this->user->cpf)->get()->first()->id;
        $this->detail->save();
        dd($this->detail);

        //dd(User::where('cpf', $this->cpf)->get()->first()->id);

        /*   Detail::create([
            'id' => User::where('cpf', $this->user->cpf)->get()->first()->id
        ]); */



        session()->flash('message', 'Usuário cadastrado com sucesso.');
        redirect('/home');
    }
    
    /**
     * UserData pega todas as propriendade no modelo User
     *
     * @return void
     */
    public function UserData(){
        return [
            'user' => $this->user,
        ];
    }

    public function updateMasculino(){
        $this->feminino = false;
        $this->masculino = true;
    }

    public function updateFeminino(){
        $this->masculino = false;
        $this->feminino = true;
    }
    
    /**
     * Reseta a variável user no sistema
     *
     * @return void
     */
    public function cleanVar(){
        $this->user = null;
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
