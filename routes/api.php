<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\BrandController;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::group(['middleware' => ['guest']], function () {
    Route::get('/category', [CategoryController::class, 'indexApi']);
    Route::get('/category/{id}', [CategoryController::class, 'showApi']);


    Route::get('/product', [ProductController::class, 'indexApi']);
    Route::get('/product/{id}', [ProductController::class, 'showApi']);


    Route::Post('place-order', [OrderController::class, 'store']);
    Route::get('tracking-order/{id}', [OrderController::class, 'trackingOrder']);

    Route::get('/brand/{id}', [BrandController::class, 'showApi']);

});