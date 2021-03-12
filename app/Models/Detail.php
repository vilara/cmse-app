<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;

    protected $keyType = 'string';

    protected $connection = 'mysql';

    protected $fillable = ['id', 'idt', 'sexo', 'om_id', 'cargo_id', 'dtNasc', 'nome_completo', 'detailable_id', 'detailable_type'];

    public function getRouteKeyName()
    {
        return 'id';
    }

    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }

    public function oms()
    {
        return $this->belongsTo('App\Om', 'om_id', 'id');
    }

    public function cargos()
    {
        return $this->belongsTo('App\Cargo', 'cargo_id', 'id');
    }

    public function sections()
    {
        return $this->belongsTo('App\Section', 'section_id', 'id');
    }

    public function detailable(){
        return $this->morphTo();
    }
}
