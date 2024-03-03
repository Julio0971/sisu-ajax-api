<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CityController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\CountryController;

// Usuarios
Route::apiResource('/users', UserController::class);

// Países
Route::get('/countries', [CountryController::class, 'index']);

// Estados
Route::get('/states/{country_id}', [StateController::class, 'index']);

// Ciudades
Route::get('/cities/{state_id}', [CityController::class, 'index']);