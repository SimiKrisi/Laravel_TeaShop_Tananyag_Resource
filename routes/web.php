<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeaController;

Route::get('/', function () {
    return view('hello');
})->name('tea.show');
Route::redirect('/', 'tea.show', 301); // véglegesen 
Route::redirect('/2', 'tea.show', 302); // átmenetileg 




Route::prefix('orders')->group(function () {
    Route::get('/', function () {
        return view('orders');
    })->name('order.index');

    Route::prefix('{id}')->group(function () {
        Route::get('/', function ($id) {
            return view('order', ['id' => $id]);
        })->name('order.show');

        Route::get('/edit', function ($id) {
            return view('order-edit', ['id' => $id]);
        })->name('order.edit');

        Route::get('/delete', function ($id) {
            return view('order-delete', ['id' => $id]);
        })->name('order.delete');
    });
    
});


Route::get('/tea', [TeaController::class, 'index'])->name('tea.index');

Route::resource('tea',TeaController::class);