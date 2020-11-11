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
        \App\Models\User::factory(20)->create();
        \App\Models\Company::factory(20)->create();
        \App\Models\Server::factory(20)->create();
        \App\Models\Advert::factory(20)->create();
    }
}
