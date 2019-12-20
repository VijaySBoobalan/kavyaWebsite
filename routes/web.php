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
