<?php

use App\Http\Controllers\GalaxiesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PlanetsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SolarSystemsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('users', [RegisterController::class, 'index']);
Route::post('register', [RegisterController::class, 'store']);

Route::post('login', [LoginController::class, 'authenticate']);

Route::get('galaxies', [GalaxiesController::class, 'index']);
Route::post('galaxies', [GalaxiesController::class, 'store']);
Route::put('galaxies/{id}', [GalaxiesController::class, 'update']);
Route::delete('galaxies/{id}', [GalaxiesController::class, 'destroy']);

Route::get('solar-systems', [SolarSystemsController::class, 'index']);
Route::post('galaxies/{galaxyId}/solar-systems', [SolarSystemsController::class, 'store']);
Route::put('solar-systems/{id}', [SolarSystemsController::class, 'update']);
Route::delete('solar-systems/{id}', [SolarSystemsController::class, 'destroy']);

Route::get('planets', [PlanetsController::class, 'index']);
Route::post('galaxies/{galaxyId}/solar-systems/{solarSystemId}/planets', [PlanetsController::class, 'store']);
Route::put('planets/{id}', [PlanetsController::class, 'update']);
Route::delete('planets/{id}', [PlanetsController::class, 'destroy']);
