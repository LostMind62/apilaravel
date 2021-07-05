<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('funcion');
});

Route::get('/resultado', function () {return view('welcome2');})->name('welcome2');

// Route::get('/opera/descarga', 'App\Http\Controllers\Paginas@descarga')->name('descarga');
// Route::get('/opera/descarga', 'App\Http\Controllers\Paginas@descarga')->name('descarga');

Route::post('opera/opera','App\Http\Controllers\Paginas@opera')->name('opera');

// Route::get('/{op?}','App\Http\Controllers\Paginas@mostrar')->name('operacion');
