<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ConfirmPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;


////////////////////////////PÁGINA PRINCIPAL////////////////////////////
Route::get('/', HomeController::class);


////////////////////////////PÁGINA RESERVAS////////////////////////////
Route::get('reservas', [ReservaController::class, 'index'])->name('reservas.index');


////////////////////////////PÁGINA CREATE, DENTRO DE PÁGINA RESERVAS////////////////////////////
Route::get('reservas/create', [ReservaController::class, 'create'])->name('reservas.create');


//////////////////PÁGINA STORE, PARA ALMACENAR EN LA BD//////////////
Route::post('reservas/store/{id}', [ReservaController::class, 'store'])->name('reservas.store');


////////////////////////////PÁGINA RESERVAS CON UNA O DOS VARIABLES////////////////////////////
Route::get('reservas/{id}', [ReservaController::class, 'show'])->name('reservas.show');







// Route::post('index', [ReservaController::class, 'index'])->name('reservas.index');
Route::get('home', [ReservaController::class, 'create'])->name('home');

// Authentication Routes...
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('login', [LoginController::class, 'logout'])->name('logout');

// Registration Routes...
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

// Password Reset Routes...
Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm']);
Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail']);
Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm']);
Route::post('password/reset', [ResetPasswordController::class, 'reset']);

