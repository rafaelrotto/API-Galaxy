<?php

namespace Database\Seeders;

use App\Models\planets;
use Illuminate\Database\Seeder;

class PlanetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        planets::create([
            'galaxyId' => '1',
            'solarSystemId' => '1',
            'name' => 'AED-5609',
            'dimension' => '95431651971149',
            'number_of_moons' => '122',
            'light_years_from_the_main_star' => '123123123312'
        ]);
    }
}
