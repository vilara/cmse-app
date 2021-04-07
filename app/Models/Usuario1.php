<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario1 extends Model
{
    use HasFactory;

    protected $guarded = [];   

    protected $connection = 'mysql2';
    protected $table = 'usuario1';
}
