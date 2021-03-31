<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    use HasFactory;
    protected $fillable = ['nomeCg', 'siglaCg'];

    public function details(){
        return $this->hasOne('App\Models\Detail', 'detail_id');
    }
}
