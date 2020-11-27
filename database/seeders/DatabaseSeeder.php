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
        \App\Models\User::factory(50)->create();
        \App\Models\Company::factory(50)->create();
        \App\Models\Server::factory(50)->create();
        \App\Models\Advert::factory(50)->create();
    }
}
