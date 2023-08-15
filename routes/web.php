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

Route::view('/', 'frontend.overview')->name('overview');
Route::view('quick-start', 'frontend.quick-start')->name('quick-start');

Route::prefix('components')->group(function () {
    Route::view('/button', 'frontend.button')->name('components.button');
    
    Route::prefix('sliders')->group(function () {
        Route::view('/slider-a', 'frontend.slider-a')->name('components.sliders.slider-a');
    });
    // Route::view('/card', 'card');
    // Route::view('/button', 'button');
    // Route::view('/button', 'button');
    // Route::view('/button', 'button');
    // Route::view('/button', 'button');
});