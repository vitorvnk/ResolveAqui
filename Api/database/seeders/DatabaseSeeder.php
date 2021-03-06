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

        \Database\Seeders\UserSeeder::run();
        \Database\Seeders\CategoriaSeeder::run();
        \Database\Seeders\ChatSeeder::run();
        \Database\Seeders\RespostaSeeder::run();
    }
}
