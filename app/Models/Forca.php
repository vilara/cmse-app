<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forca extends Model
{
    use HasFactory;
    protected $fillable = ['abrev','nome'];

    public $timestamps = false;

    public function militares(){
            return $this->hasMany('App\Militar');
    }
    
}
