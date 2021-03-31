<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Om extends Model
{
    use HasFactory;
    protected $connection = 'mysql';

    protected $fillable = ['nomeOm','siglaOm','codom','codug'];

    public $timestamps = false;

    public function sections()
    {
        return $this->belongsToMany('App\Models\Section');
    }

    public function details(){
        return $this->hasOne('App\Models\Detail', 'detail_id');
    }

}
