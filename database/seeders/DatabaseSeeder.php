<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            UserSeeder::class,
            ForcaSeeder::class,
            OmSeeder::class,
            SectionSeeder::class,
            PostogradSeeder::class,
            MilitarSeeder::class,
            CivilSeeder::class,
            CargoSeeder::class,
            DetailSeeder::class,
            RolerSeeder::class,
            PermissionSeeder::class
        ]);
    }
}
