<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('index');
    }
    public function resultado(Request $request){
        $altura = $request->altura;
        $peso = $request->peso;
        $imc = $peso/($altura * $altura);
        $status = "";
        
        if($imc < 18.5){
            $status = "Abaixo do peso";
        }else if($imc >= 18.5 && $imc <24.9){
            $status = "Normal";
        }else if($imc >= 25 && $imc < 29.9){
            $status = "Sobrepeso";
        }else if($imc >= 30){
            $status = "Obesidade";
        }
        return view('resultado', compact('status', 'imc'));
    }
}
