<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeaController;

Route::get('/', [TeaController::class, 'index'])->name('home');
Route::get('/menu', function () {
    return view('menu');
})->name('menu');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');