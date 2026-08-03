<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeaController;
use App\Http\Controllers\MonthlyReportController;

#section: Model-Controller-Migration-Seeder Mapping
    // Model        Controller              migration                   seeder
    // Tea          TeaController           create_teas_table           TeaSeeder
    // User         UserController          create_users_table          UserSeeder
    // Order        OrderController         create_orders_table         OrderSeeder
    // OrderItem    OrderItemController     create_order_items_table    OrderItemSeeder
#endsection

// TeaController (admin)
// -authorizeResource
// - TeaService

// OrderController
// - OrderService

// MenuController

// Route::get('/admin/teas', [TeaController::class, 'index'])->name('teas.index');
// Route::get('/admin/teas/create', [TeaController::class, 'create'])->name('teas.create');
// Route::post('/admin/teas', [TeaController::class, 'store'])->name('teas.store');
// Route::get('/admin/teas/{tea}', [TeaController::class, 'show'])->name('teas.show');
// Route::get('/admin/teas/{tea}/edit', [TeaController::class, 'edit'])->name('teas.edit');
// Route::patch('/admin/teas/{tea}', [TeaController::class, 'update'])->name('teas.update');
// Route::delete('/admin/teas/{tea}', [TeaController::class, 'destroy'])->name('teas.destroy');


Route::resource('/admin/teas', TeaController::class);
Route::get('/monthly-report', MonthlyReportController::class)->name('monthly_report');