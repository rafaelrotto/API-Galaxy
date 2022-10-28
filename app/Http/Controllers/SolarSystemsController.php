<?php

namespace App\Http\Controllers;

use App\Http\Resources\SolarSystemsResource;
use App\Models\solar_systems;
use Illuminate\Http\Request;

class SolarSystemsController extends Controller
{
    public function index()
    {
        $solar_system = solar_systems::all();

        return SolarSystemsResource::collection($solar_system);
    }

    public function store(Request $request, $galaxy_id)
    {
        $request->validate([
            'name' => 'required|',
            'dimension' => 'numeric',
            'number_of_planets' => 'numeric',
            'main_star' => 'max:255|string',
        ]);

        $data = $request->all();

        $data['galaxyId'] = $galaxy_id;

        solar_systems::query()->create($data);

        return $data;
    }

    public function update(Request $request, $id){
        solar_systems::find($id)->update([
            'name' => $request->name,
            'dimension' => $request->dimension,
            'number_of_planets' => $request->number_of_planets,
            'main_star' => $request->main_star
        ]);
    }

    public function destroy($id){
        solar_systems::destroy($id);
    }
}
