<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReservaController;



////////////////////////////PÁGINA PRINCIPAL////////////////////////////
Route::get('/', HomeController::class);


////////////////////////////PÁGINA RESERVAS////////////////////////////
Route::get('reservas', [ReservaController::class, 'index'])->name('reservas.index');


////////////////////////////PÁGINA CREATE, DENTRO DE PÁGINA RESERVAS////////////////////////////
Route::get('reservas/create', [ReservaController::class, 'create'])->name('reservas.create');


////////////////////////////PÁGINA RESERVAS CON UNA O DOS VARIABLES////////////////////////////
Route::get('reservas/{id}/{categoria?}', [ReservaController::class, 'show'])->name('reservas.show');
