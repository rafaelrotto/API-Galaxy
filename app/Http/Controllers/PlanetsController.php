<?php

namespace App\Http\Controllers;

use App\Http\Resources\PlanetsResource;
use App\Models\planets;
use Illuminate\Http\Request;

class PlanetsController extends Controller
{
    public function index()
    {
        $planets = planets::all();

        return PlanetsResource::collection($planets);
    }

    public function store(Request $request, $galaxy_id, $solar_system_id)
    {
        $request->validate([
            'name' => 'required|',
            'dimension' => 'numeric',
            'number_of_moons' => 'numeric',
            'light_years_from_the_main_star' => 'numeric',
        ]);

        $data = $request->all();

        $data['galaxyId'] = $galaxy_id;

        $data['solarSystemId'] = $solar_system_id;

        planets::query()->create($data);

        return $data;
    }
}
