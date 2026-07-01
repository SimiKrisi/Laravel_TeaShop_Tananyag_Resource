<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeaController;
use App\Http\Controllers\MonthlyReportController;

// Tea model -> TeaController 

// Order model -> OrderController

// TeaController (admin)
// -authorizeResource
// - TeaService

// OrderController
// - OrderService

// MenuController


Route::resource('teas', TeaController::class);
Route::get('/monthly-report', MonthlyReportController::class)->name('monthly_report');