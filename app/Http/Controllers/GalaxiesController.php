<?php

namespace App\Http\Controllers;

use App\Http\Resources\GalaxiesResource;
use App\Models\galaxies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;

class GalaxiesController extends Controller
{
    public function index()
    {
        $galaxies = galaxies::all();
        return GalaxiesResource::collection($galaxies);

    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255|string',
            'dimension' => 'numeric',
            'number_of_solar_systems' => 'numeric',
        ]);

        $data = $request->all();

        galaxies::query()->create($data);

        return $data;
    }

    public function update(Request $request, $id){
        galaxies::find($id)->update([
            'name' => $request->name,
            'dimension' => $request->dimension,
            'number_of_solar_systems' => $request->number_of_solar_systems
        ]);
    }

    public function destroy($id){
        galaxies::destroy($id);
    }
}
