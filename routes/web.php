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


Route::resource('/admin/teas', TeaController::class);
Route::get('/monthly-report', MonthlyReportController::class)->name('monthly_report');