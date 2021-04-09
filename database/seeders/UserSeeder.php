<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Usuario1;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
 
        $usuarios =  Usuario1::all();
        foreach ($usuarios as $usuario) {
            User::create([
                'name' => $usuario->login,
                'email' => $usuario->email,
                'email_verified_at' => now(),
                'password' => Hash::make($usuario->senha)
            ]);
        } 
   /* 
       User::factory()
        ->count(1)
        ->create();*/
    
    }
}
