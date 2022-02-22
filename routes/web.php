<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReservaController;



////////////////////////////PÁGINA PRINCIPAL////////////////////////////
Route::get('/', HomeController::class);


////////////////////////////PÁGINA PISTAS////////////////////////////
Route::get('pistas', [ReservaController::class, 'index'])->name('pistas.index');


////////////////////////////PÁGINA CREATE, DENTRO DE PÁGINA PISTAS////////////////////////////
Route::get('pistas/create', [ReservaController::class, 'create'])->name('pistas.create');


////////////////////////////PÁGINA PISTAS CON UNA O DOS VARIABLES////////////////////////////
Route::get('pistas/{id}/{categoria?}', [ReservaController::class, 'show'])->name('pistas.show');
