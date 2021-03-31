<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postograd extends Model
{
    use HasFactory;

    protected $fillable = ['nomePg','siglaPg','ordemPg','circuloPg'];

    public $timestamps = false;

    public function militares()
    {
        return $this->hasMany('App\Models\Militar');
    }

    public function details(){
        return $this->hasManyThrough(
            'App\Models\Detail',
            'App\Models\Militar',
            'postograd_id',
            'detailable_id',
            'id',
            'id'
        );
    }
}
