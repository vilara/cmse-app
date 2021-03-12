<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roler extends Model
{
    use HasFactory;

    protected $connection = 'mysql';

    protected $fillable = [
        'name', 'label'
    ];

    public function permissions(){
        return $this->belongsToMany('App\Permission', 'permission_roler', 'roler_id', 'permission_id')->withPivot('roler_id', 'permission_id');
    }

    public function users(){
        return $this->belongsToMany('App\User', env('DB_DATABASE').'.roler_user', 'roler_id', 'user_id');
    }
}
