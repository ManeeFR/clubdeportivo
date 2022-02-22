<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PistaController;



////////////////////////////PÁGINA PRINCIPAL////////////////////////////
Route::get('/', HomeController::class);


////////////////////////////PÁGINA PISTAS////////////////////////////
Route::get('pistas', [PistaController::class, 'index'])->name('pistas.index');


////////////////////////////PÁGINA CREATE, DENTRO DE PÁGINA PISTAS////////////////////////////
Route::get('pistas/create', [PistaController::class, 'create'])->name('pistas.create');


////////////////////////////PÁGINA PISTAS CON UNA O DOS VARIABLES////////////////////////////
Route::get('pistas/{id}/{categoria?}', [PistaController::class, 'show'])->name('pistas.show');
