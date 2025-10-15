<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\calculadora;


Route::get('/', function () {
    return view('welcome');

});

Route::get('/multiplicacion/{num1}/{num2}', [calculadora::class, 'multiplicacion']);

Route::get('/division/{num1}/{num2}',[calculadora::class,'division']);

