<?php

use App\Http\Controllers\UserController;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mailContact', [UserController::class, 'mailContact'])->name('mailContact');
Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
Route::get('/admin', [UserController::class, 'index'])->name('login');
Route::get('/utama', [UserController::class, 'utama'])->name('utama');
Route::post('/authanticate', [UserController::class, 'authanticate'])->name('authanticate');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');
