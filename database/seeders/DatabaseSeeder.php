<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Country;
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
        City::create(['name' => 'Nikolaev', 'country_id' => Country::create(['name' => 'Ukraine'])->id]);
    }
}
