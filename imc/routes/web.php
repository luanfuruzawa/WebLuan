<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/imc', [MainController::class, 'index']);
Route::post('/imc/estatura', [MainController::class, 'resultado']);
