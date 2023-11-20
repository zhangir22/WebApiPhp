<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AuthMiddleware;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware([AuthMiddleware::class])->group(function () {

    Route::get('sales', [ApiController::class, 'listSale']);
    Route::get('stocks', [ApiController::class, 'listStock']);
    Route::get('orders', [ApiController::class, 'listOrder']);
    Route::get('incomes', [ApiController::class, 'listIncome']);
});