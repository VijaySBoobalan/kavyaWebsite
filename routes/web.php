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
    return view('Our_Service_Industry/auto_parts');
})->name('auto_parts');

Route::get('/engineering', function () {
    return view('/Our_Service_Industry/engineering');
})->name('engineering');

Route::get('/merine', function () {
    return view('/Our_Service_Industry/merine');
})->name('merine');

Route::get('/food_industry', function () {
    return view('/Our_Service_Industry/food_industry');
})->name('food_industry');

Route::get('/construction_industry', function () {
    return view('/Our_Service_Industry/construction_industry');
})->name('construction_industry');

Route::get('/steel_coils', function () {
    return view('/Our_Service_Industry/steel_coils');
})->name('steel_coils');

Route::get('/services', function () {
    return view('services.service');
})->name('services');
