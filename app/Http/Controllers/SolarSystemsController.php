<?php

namespace App\Http\Controllers;

use App\Models\solar_systems;
use Illuminate\Http\Request;

class SolarSystemsController extends Controller
{
    public function index()
    {
        return solar_systems::all();
    }

    public function store(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|',
            'dimension' => 'numeric',
            'number_of_planets' => 'numeric',
            'main_star' => 'max:255|string',
        ]);

        $data = $request->all();

        $data['galaxyId'] = $id;

        solar_systems::query()->create($data);

        return $data;
    }
}
