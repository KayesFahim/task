<?php

use App\Http\Controllers\APIFetchController;
use App\Http\Controllers\FlightController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/flight', function () {
    return view('flight');
});

Route::get('/flightsearch', function () {
    return view('flightsearch');
});

Route::get('/flightsearch', [FlightController::class, 'flightsearch']);
Route::get('/fetchapi', [APIFetchController::class, 'fetchapi']);


