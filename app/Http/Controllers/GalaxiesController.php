<?php

namespace App\Http\Controllers;

use App\Models\galaxies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GalaxiesController extends Controller
{
    public function index()
    {
        return galaxies::all();
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
}
