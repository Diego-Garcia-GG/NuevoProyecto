<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class calculadora extends Controller
{


    public function division($num1,$num2){
        if($num2 == 0)
            return "No se puede dividir cualquier número entre 0, es indeterminado!";
        else
            $resultado = $num1 / $num2;
        return view('Calculadora.division', compact('resultado','num1','num2'));
    }
}
