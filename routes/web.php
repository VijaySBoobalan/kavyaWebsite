<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/auto_parts', function () {
    return view('auto_parts');
})->name('auto_parts');

Route::get('/engineering', function () {
    return view('engineering');
})->name('engineering');

Route::get('/services', function () {
    return view('services.service');
})->name('services');

Route::get('/services/Ocean', function () {
    return view('services.ocean');
})->name('Ocean');

Route::get('/services/AirFright', function () {
    return view('services.air_fright');
})->name('AirFright');

Route::get('/services/RoadTransport', function () {
    return view('services.road_transport');
})->name('RoadTransport');

Route::get('/services/WHOperations', function () {
    return view('services.warehouse');
})->name('WHOperations');

Route::get('/services/ContractLogistics', function () {
    return view('services.contract_logistics');
})->name('ContractLogistics');

Route::get('/services/CargoExpress', function () {
    return view('services.cargo-express');
})->name('CargoExpress');
