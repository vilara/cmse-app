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

class UsersEdit extends Component
{


    public $idUser;
    public User $user;
    public Militar $militar;
    public Detail $detail;
    public Civil $civil;
    public $detailable_type;
    public $password_confirmation;
    public $password;


    public $oms;
    public $cargos;
    public $sections;
    public $postograds;
    public $forcas;

    public function mount(User $user, Detail $detail, Militar $militar, Civil $civil){
        
        $this->user = $user;
        $this->detail = $detail;
        $this->militar = $militar;
        $this->civil = $civil;

        $this->editarUserForm();
        
       
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
            'password_confirmation' => '',
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

    public function editarUserForm()
    {
       // $this->idUser = $id;
        $this->user =  User::find($this->idUser);
        unset($this->user->password);

        $this->detail = Detail::find($this->user->id);
        $this->detail->detailable_type == 'militar' ? $this->militar = Militar::find($this->detail->detailable_id) : $this->civil = Civil::find($this->detail->detailable_id);

    }

    public function UserData()
    {

        if ($this->password) {
            $this->user->password = Hash::make($this->password);
        }
      
        return $this->user;
    }

    public function cadastrar()
    {
          
        $this->validate();
        
      
        if ($this->password) {
              $this->validate([
                'password' => 'required|min:8',
                'password_confirmation' => 'required|same:password|min:6',
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
          

            $this->limpar();
            
            session()->flash('message', 'Usuário Editado cadastrado com sucesso');
       
    }

    public function limpar()
    {

        $this->user =  User::find($this->idUser);

        $this->detail = Detail::find($this->user->id);
        $this->detail->detailable_type == 'militar' ? $this->militar = Militar::find($this->detail->detailable_id) : $this->civil = Civil::find($this->detail->detailable_id);

     
        $this->reset(['password','password_confirmation']);
        $this->resetValidation();
    }


    




    public function render()
    {
        return view('livewire.model.user.users-edit');
    }
}
