<?php

namespace App\Http\Livewire\Model;

use App\Models\Cargo;
use App\Models\Civil;
use App\Models\Detail;
use App\Models\Militar;
use App\Models\Om;
use App\Models\Postograd;
use App\Models\Section;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use PhpParser\Node\Expr\BinaryOp\BooleanOr;

class Users extends Component
{
    public $user;
    public $militar;
    public $detail;
    public $civil;
    public $sexo;
    public $password;
    public $password_confirmation;

        
    /**
     * Propriedades para popular os selects
     *
     * @var mixed
     */
    public $oms;
    public $cargos;
    public $sections;
    public $postograds;

    public function mount(User $user, Detail $detail, Militar $militar, Civil $civil){
      $this->user = $user;
      $this->detail = $detail;
      $this->militar = $militar;
      $this->civil = $civil;
      $this->oms = Om::all();
      $this->cargos = Cargo::all();
      $this->sections = Section::all();
      $this->postograds = Postograd::all();
    }

    public function rules()
    {
        $array = [
            'user.name' => 'required|string|unique:App\Models\User,name|min:4',
            'user.email' => 'required|email|unique:App\Models\User,email',
            'user.cpf' => 'required|string|size:11|unique:App\Models\User,cpf|digits:11',
            'password' => 'required|min:8|confirmed',
            'detail.idt' => 'required',
            'detail.nome_completo' => 'required|string|min:6',
            'sexo' => 'required',
            'detail.dtNasc' => 'required',
            'detail.om_id' => 'required',
            'detail.cargo_id' => 'required',
            'detail.section_id' => 'required',
            'detail.detailable_type' => 'required',
            'militar.postograd_id' => '',
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
        'sexo.required' => 'Esse campo é obrigatório',
        'detail.nome_completo.required' => 'Esse campo é obrigatório',
        'detail.dtNasc.required' => 'Esse campo é obrigatório',
        'detail.om_id.required' => 'Esse campo é obrigatório',
        'detail.cargo_id.required' => 'Esse campo é obrigatório',
        'detail.section_id.required' => 'Esse campo é obrigatório',
        'detail.detailable_type.required' => 'Esse campo é obrigatório',
    ];

     
    public function UserData(){
        $this->user->password = Hash::make($this->password);
        return $this->user;
    }


    public function cadastrar()
    {
        $this->validate(); 
        if($this->detail->detailable_type == 'militar'){
            $this->validate(['militar.postograd_id' => 'required']);
        }elseif($this->detail->detailable_type == 'civil'){
            $this->validate(['civil.primeiro_nome' => 'required']);
        }

       
       
        $this->UserData()->save();
        
        $this->militar->situacao = 'ativa';
        $this->militar->nome_guerra = 'vilara';
        $this->militar->forca_id = 1;
        $this->militar->save();

        


        $this->detail->detailable_type == 'militar' && $this->detail->detailable_id = Militar::all()->last()->id;
        $this->detail->id = User::where('cpf', $this->user->cpf)->get()->first()->id;
        $this->detail->sexo = $this->sexo;
       
        
        $this->detail->save();
        dd($this->detail);
        
    }

    public function render()
    {
        return view('livewire.model.users');
    }
}
