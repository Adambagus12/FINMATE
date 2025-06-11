<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PredictionController;


Route::get('/', function () {
    return view('landing-page');
})->name('home');

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);

    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');  // buat file blade dashboard nanti
    })->name('dashboard');

    Route::get('/calculate', function () {
        $result = session('result');
    return view('calculate', compact('result'));
    })->name('calculate');



    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::post('/predict', [PredictionController::class, 'predict'])->name('predict');

});
