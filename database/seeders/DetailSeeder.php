<?php

namespace Database\Seeders;

use App\Models\Detail;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       $users =  User::all();
       foreach ($users as $user) {
             Detail::create([
            'id' => $user->id,
            'idt' => Str::random(10),
            'sexo' => 'masculino',
            'om_id' => 1,
            'cargo_id' => 1,
            'dtNasc' => '1970-03-26',
            'section_id' => 1,
            'nome_completo' => 'Marcelo Martins Vilara',
            'detailable_id' => 1,
            'detailable_type' => 'militar'/*  */
        ]);
       }
     
    }
}
