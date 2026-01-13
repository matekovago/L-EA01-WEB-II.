<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/kapcsolat', function () {
    return view('kapcsolat');
});

Route::get('/crud', function () {
    return view('crud');
});

Route::get('/diagram', function () {
    return view('diagram');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/uzenetek', function () {
    return view('uzenetek');
})->middleware('auth');


use App\Http\Controllers\AuthController;
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

use App\Http\Controllers\KapcsolatController;
    Route::get('/kapcsolat', [KapcsolatController::class, 'showForm'])->name('kapcsolat');
    Route::post('/kapcsolat', [KapcsolatController::class, 'sendMessage'])->name('kapcsolat.send');

use App\Http\Controllers\AdatbazisController;
    Route::get('/adatbazis', [AdatbazisController::class, 'index'])->name('adatbazis');

