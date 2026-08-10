<?php

use App\Http\Controllers\Api\TeaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// php artisan install:api

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('teas', TeaController::class);