<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class calculadora extends Controller
{
    public function multiplicacion($num1, $num2)
    {
        $resultado = $num1 * $num2;
        return view('calculadora.multiplicacion', ['num1' => $num1, 'num2' => $num2, 'resultado' => $resultado]);
    }


}
