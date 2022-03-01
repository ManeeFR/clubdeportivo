<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\PistaController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;


Route::get('/', HomeController::class);


Route::controller(PistaController::class)->group(function() {

    Route::get('home', 'welcome')->name('home');
    Route::post('home', 'welcome')->name('home');

    Route::get('pistas', 'index')->name('pistas');
    Route::get('gallery', 'gallery')->name('gallery');
});


Route::controller(ReservaController::class)->group(function() {

    Route::post('reservas/store/{id}', 'store')->name('reservas.store');

    Route::get('reservas/{id}', 'show')->name('reservas.show');

});


Route::get('contactanos', function () {

    $correo = new ContactanosMailable;
    Mail::to('manuel.fr.6b@gmail.com')->send($correo);

    return view('emails.contactanos');

})->name('contactanos');


Route::get('pageError', [PistaController::class, 'pageError'])->name('pageError');


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
