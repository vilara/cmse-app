<?php

namespace App\Http\Livewire\Model\User;

use App\Models\Cargo;
use App\Models\Civil;
use App\Models\Detail;
use App\Models\Forca;
use App\Models\Militar;
use App\Models\Om;
use App\Models\Postograd;
use App\Models\Section;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

use Livewire\Component;

class UserForm extends Component
{

    public $user;
    public $militar;
    public $detail;
    public $civil;

    public $password;
    public $password_confirmation;
    public $oms;
    public $cargos;
    public $sections;
    public $postograds;
    public $forcas;

    protected $listeners = ['cadastrar', 'editarUserForm', 'limparForm', 'removeUser', 'desativarUser', 'ativarUser'];

    public function mount(User $user, Detail $detail, Militar $militar, Civil $civil)
    {

        $this->user = $user;
        $this->detail = $detail;
        $this->militar = $militar;
        $this->civil = $civil;
        $this->oms = Om::all();
        $this->cargos = Cargo::all();
        $this->sections = Section::all();
        $this->postograds = Postograd::all();
        $this->forcas = Forca::all();
    }

    public function rules()
    {
        $array = [
            'user.name' => 'required|string|min:4',
            'user.email' => 'required|email',
            'user.cpf' => 'required|string|size:11|digits:11',
            'password' => '',
            'detail.idt' => 'required',
            'detail.nome_completo' => 'required|string|min:6',
            'detail.sexo' => 'required',
            'detail.dtNasc' => 'required',
            'detail.om_id' => 'required',
            'detail.cargo_id' => 'required',
            'detail.section_id' => 'required',
            'detail.detailable_type' => 'required',
            'militar.postograd_id' => '',
            'militar.nome_guerra' => '',
            'militar.forca_id' => '',
            'militar.situacao' => '',
            'civil.primeiro_nome' => '',

        ];

        return $array;
    }


    protected $messages = [
        'user.name.required' => 'Esse campo é obrigatório',
        'user.name.min' => 'Mínimo de 4 caracteres',
        'user.name.unique' => 'Este nome já está cadastrado no sistema',
        'user.email.required' => 'Esse campo é obrigatório',
        'user.email.email' => 'E-mail inválido',
        'user.email.unique' => 'Este email já está cadastrado no sistema',
        'user.cpf.required' => 'Esse campo é obrigatório',
        'user.cpf.size' => 'Esse campo deve conter 11 dígitos',
        'user.cpf.unique' => 'Este cpf já está cadastrado no sistema',
        'user.cpf.digits' => 'Este campo só aceita números',
        'password.required' => 'Este campo é obrigatório',
        'password.min' => 'A senha deverá conter no mínimo 8 caracteres',
        'password.confirmed' => 'Erro de confirmação de senha',
        'detail.idt.required' => 'Esse campo é obrigatório',
        'detail.sexo.required' => 'Esse campo é obrigatório',
        'detail.nome_completo.required' => 'Esse campo é obrigatório',
        'detail.nome_completo.unique' => 'Este nome já está cadastrado no sistema',
        'detail.dtNasc.required' => 'Esse campo é obrigatório',
        'detail.om_id.required' => 'Esse campo é obrigatório',
        'detail.cargo_id.required' => 'Esse campo é obrigatório',
        'detail.section_id.required' => 'Esse campo é obrigatório',
        'detail.detailable_type.required' => 'Esse campo é obrigatório',
    ];


    public function UserData()
    {

        if ($this->user->id && $this->password) {
            $this->user->password = Hash::make($this->password);
        }
        if (!$this->user->id && $this->password) {
            $this->user->password = Hash::make($this->password);
        }
        if ($this->user->id && !$this->password) {
            return $this->user;
        }
        return $this->user;
    }


    public function editarUserForm($id)
    {
        $this->user = User::find($id);
        $this->detail = Detail::find($id);
        $this->detail->detailable_type == 'militar' ? $this->militar = Militar::find($this->detail->detailable_id) : $this->civil = Civil::find($this->detail->detailable_id);
    }

    public function limparForm()
    {
        $this->user = User::make();
        $this->detail->detailable_type == 'militar' ? $this->militar = Militar::make() : $this->civil = Civil::make();
        $this->detail = Detail::make();
        $this->reset(['password','password_confirmation']);
        $this->resetValidation();
        
        
    }



    public function removeUser($id){

       $det =  Detail::find($id);
       $det->detailable_type == 'militar' ? Militar::destroy($det->detailable_id) :  Civil::destroy($det->detailable_id);
       $det->user()->delete();
       
       //$usu->detail->delete();

        $this->emit('triggerRefresh'); 
    }


    public function desativarUser($id){

        User::find($id)->update(['active' => 0]);
        $this->emit('triggerRefresh'); 

    }
    public function ativarUser($id){

        User::find($id)->update(['active' => 1]);
        $this->emit('triggerRefresh'); 

    }


    public function cadastrar()
    {


        
       $this->validate();
        
      
      if ($this->user->id && $this->password) {
            $this->validate([
                'password' => 'required|min:8|confirmed',
            ]);
        }

        if (!$this->user->id) {
            $this->validate([
                'password' => 'required|min:8|confirmed',
                'user.name' => 'unique:App\Models\User,name|min:4',
                'user.email' => 'unique:App\Models\User,email',
                'user.cpf' => 'unique:App\Models\User,cpf',
                'detail.nome_completo' => 'unique:App\Models\Detail,nome_completo',

            ]);
        }

        if ($this->detail->detailable_type == 'militar') {
            $this->validate([
                'militar.postograd_id' => 'required',
                'militar.nome_guerra' => 'required',
                'militar.forca_id' => 'required',
                'militar.situacao' => 'required',
            ]);
        } elseif ($this->detail->detailable_type == 'civil') {
            $this->validate(['civil.primeiro_nome' => 'required']);
        } 
       


        $this->UserData()->save();
        
        
        if ($this->detail->detailable_type == 'militar') {
            $this->militar->save();
        }elseif ($this->detail->detailable_type == 'civil') {
            $this->civil->save();
        }
        
        $this->detail->id = User::where('cpf', $this->user->cpf)->get()->first()->id;
        
        if ($this->detail->detailable_type == 'militar') {
            $this->detail->detailable()->associate($this->militar)->save();
        }elseif ($this->detail->detailable_type == 'civil') {
            $this->detail->detailable()->associate($this->civil)->save();
        }
        
        
        $this->limparForm();
        $this->emit('triggerRefresh'); 
        $this->emit('hiddenShowModal');
       
        
    }

    public function render()
    {
        return view('livewire.model.user.user-form');
    }
}
