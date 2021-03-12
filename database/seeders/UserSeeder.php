<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::create([
            'name' => 'Marcelo Martins Vilara',
            'email' => 'marcelovilara@gmail.com',
            'cpf' => '11921793821',
            'password' => Hash::make(12345678)
        ]);
    }
}
