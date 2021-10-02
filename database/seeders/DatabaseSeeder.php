<?php

namespace Database\Seeders;

use App\Models\Filiere;
use App\Models\Parcour;
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
         \App\Models\User::factory(1)->create();

        Parcour::factory()->count(5)->has(Filiere::factory()->count(10))->create();
    }
}
