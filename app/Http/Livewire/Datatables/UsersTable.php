<?php

namespace App\Http\Livewire\Datatables;

use App\Models\User;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class UsersTable extends LivewireDatatable
{
    public $model = User::class;

    public function columns()
    {

        return [
            Column::name('users.id')->label('ID')->linkTo('email', 6),
            Column::name('email')->label('Email')->linkTo('users', 3),
            Column::name('created_at'),
        ];
        
    }
}