<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\calculadora;


Route::get('/', function () {
    return view('welcome');

});

Route::get('/multiplicacion/{num1}/{num2}', [calculadora::class, 'multiplicacion']);

Route::get('/division/{num1}/{num2}',[calculadora::class,'division']);

Route::get('/suma/{num1}/{num2}', [calculadora::class, 'suma']);

Route::get('/resta/{num1}/{num2}', [calculadora::class, 'resta']);

