<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CountryStateCityController;

Route::get('/', function () {
    return view('location');
});
Route::get('/location', function () {
    return view('location');
});

Route::get('/get-country', [CountryStateCityController::class, 'getCountry']);
Route::post('/get-state', [CountryStateCityController::class, 'getState']);
Route::post('/get-city', [CountryStateCityController::class, 'getCity']);
