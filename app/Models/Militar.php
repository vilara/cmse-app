<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Militar extends Model
{
    use HasFactory;
    protected $fillable = ['postograd_id','situacao','nome_guerra','forca_id'];
    protected $table = 'militares';

    public function postograds()
    {
        return $this->belongsTo('App\Models\Postograd', 'postograd_id', 'id');
    }

    public function forcas()
    {
        return $this->belongsTo('App\Models\Forca', 'forca_id', 'id');
    }

    public function detail(){
        return $this->morphOne('App\Models\Detail', 'detailable');
    }
}
