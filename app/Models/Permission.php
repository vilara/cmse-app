<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    protected $connection = 'mysql';

    protected $fillable = [
        'name', 'label'
    ];

    public function rolers(){
        return $this->belongsToMany('App\Roler')->withPivot('permission_id', 'roler_id');
    }
}
