<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Civil extends Model
{
    use HasFactory;

    protected $fillable = ['primeiro_nome'];
    protected $table = 'civis';

    public function detail(){
        return $this->morphOne('App\Models\Detail', 'detailable');
    }
}
