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

    public function search(Request $request) {

        $data = $request->get('data');

        $planets = planets::where('name', 'like', '%' . $data . '%')
                         ->orWhere('dimension', 'like', '%' . $data . '%')
                         ->orWhere('number_of_moons', 'like', '%' . $data . '%')
                         ->orWhere('light_years_from_the_main_star', 'like', '%' . $data . '%')
                         ->get();

        return PlanetsResource::collection($planets);   
    }

    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required|',
            'dimension' => 'numeric',
            'number_of_moons' => 'numeric',
            'light_years_from_the_main_star' => 'numeric',
        ]);
        
        planets::find($id)->update([
            'name' => $request->name,
            'dimension' => $request->dimension,
            'number_of_moons' => $request->number_of_moons,
            'light_years_from_the_main_star' => $request->light_years_from_the_main_star
        ]);
    }

    public function destroy($id){
        planets::destroy($id);
    }
}
