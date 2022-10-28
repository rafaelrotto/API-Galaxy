<?php

namespace Database\Seeders;

use App\Models\solar_systems;
use Illuminate\Database\Seeder;

class SolarSystemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        solar_systems::create([
            'galaxyId' => '1',
            'name' => 'AED-5609',
            'dimension' => '95431651971149',
            'number_of_planets' => '9984944984',
            'main_star' => 'Sum'
        ]);
    }
}
