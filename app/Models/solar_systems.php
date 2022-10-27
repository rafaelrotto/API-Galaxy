<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class solar_systems extends Model
{
    use HasFactory;

    protected $fillable = [
        'galaxyId',
        'name',
        'dimension',
        'number_of_planets',
        'main_star'
    ];
}
