<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\Cars\AdvancedSearchController;
use App\Http\Controllers\Cars\MissingPartsController;
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




Route::prefix("cars")->as("cars.")->group(function () {
    Route::get("/", [AdvancedSearchController::class, 'index']);
    Route::get("/parts", [AdvancedSearchController::class, 'carsPartsSearch']);
    Route::get("/brands", [AdvancedSearchController::class, 'getBrands']);
    Route::get("/categories", [AdvancedSearchController::class, 'getCategories']);
    Route::get("/series", [AdvancedSearchController::class, 'getSeries']);
});


Route::post('missing-parts', [MissingPartsController::class, "store"])->name('missing_parts.store')->middleware("auth:sanctum");
