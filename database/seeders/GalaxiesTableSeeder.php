<?php

namespace Database\Seeders;

use App\Models\galaxies;
use Illuminate\Database\Seeder;

class GalaxiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        galaxies::create([
            'name' => 'milky way',
            'dimension' => '95431651971149',
            'number_of_solar_systems' => '-9984944984',
        ]);
    }
}
