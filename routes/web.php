<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\calculadora;

Route::get('/division/{num1}/{num2}',[calculadora::class,'division']);
