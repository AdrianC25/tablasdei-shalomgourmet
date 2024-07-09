<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/shalom-gourmet', function () {
    return view('shalom');
});
Route::get('/tablas-dei', function () {
    return view('tablasdei');
});
Route::get('/contactos', function () {
    return view('contactos');
});

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
