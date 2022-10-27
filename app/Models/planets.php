<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class planets extends Model
{
    use HasFactory;

    protected $fillable = [
        'galaxyId',
        'solarSystemId',
        'name',
        'dimension',
        'number_of_moons',
        'light_years_from_the_main_star'
    ];
}
