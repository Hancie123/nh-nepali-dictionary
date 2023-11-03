<?php

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
    return view('index');
});

Route::get('/terms-conditions', function () {
    return view('terms_conditions');
});

Route::get('/about-us', function () {
    return view('about_us');
});

Route::get('/contributors', function () {
    return view('contributors');
});
