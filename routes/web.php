<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SwiperController;
use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\Group;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



//guest user Routes
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::view('contact', 'user.contact');
Route::get('product/{id}', [ProductController::class, 'show']);
Route::get('category/{id}', [CategoryController::class, 'getCategory'])->name('user.category.products');
Route::get('search-category-products/{tracking_number}', [CategoryController::class, 'productSearch'])->name('category.products.search');
Route::get('brand/{id}', [BrandController::class, 'getBrand']);

Route::get('order/search', [OrderController::class, 'searchOrder']);
Route::post('tracking-order/{id}', [OrderController::class, 'trackingOrder'])->name('tracking.order');

Route::get('/advanced-search', [ProductController::class, 'advancedSearch'])->name('products.advanced_search');
Route::get('/faq', [ProductController::class, 'faq'])->name('faq');
Route::get('/about-us', [ProductController::class, 'aboutUs'])->name('about');

Route::get('/cart', [OrderController::class, 'cart'])->name('cart');
Route::get('/checkout', [OrderController::class, 'checkout'])->name('checkout');
Route::post('/proceed-order', [OrderController::class, 'store'])->name('proceed.order');





//ADMIN Routes
Route::group(["middleware" => "guest"], function () {
    Route::view('admin/login', 'admin.auth.login')->name('admin.login');
    Route::post('admin/loginRequest', [AuthController::class, 'login'])->name('admin.login.submit');
});

//admin login
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {

    //logout
    Route::get('/logout', [AuthController::class, 'logout'])->name('admin.logout');

    //dashboard route
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    //categories
    Route::resource('/category', CategoryController::class);
    Route::get('/categories-search', [CategoryController::class, 'search'])->name('categories.search');
    Route::get('/category/products/{id}', [CategoryController::class, 'showCategoryProducts'])->name('category.products');


    //products
    Route::resource('/product', ProductController::class);
    Route::get('admin/products-search', [ProductController::class, 'search'])->name('products.search');

    //admin crud
    Route::resource('/admin', UserController::class);

    //brands
    Route::resource('brand', BrandController::class);

    //areas
    Route::resource('area', AreaController::class);

    //swipers
    Route::resource('swipers', SwiperController::class);

    //orders
    Route::resource('order', OrderController::class);
    Route::get('/orders-search', [OrderController::class, 'search'])->name('orders.search');
    Route::get('/order/{id}/products', [OrderController::class, 'products'])->name('order.products');
    Route::get('/order/product/{product_id}/order/{order_id}/delete', [OrderController::class, 'removeProduct']);
    Route::get('/order/{id}/done', [OrderController::class, 'done'])->name('order.done');
    Route::get('/new-orders', [OrderController::class, 'newOrders'])->name('orders.fetchPage');
    Route::get('/orders/new/export', [OrderController::class, 'exportNewOrders'])->name('export.new-orders');
    Route::get('/pending-order/{id}', [OrderController::class, 'markAsPending']);
    Route::get('/shipped-order/{id}', [OrderController::class, 'markAsShipped']);
    Route::get('/delivered-order/{id}', [OrderController::class, 'markAsDelivered']);
    Route::get('/paid-order/{id}', [OrderController::class, 'paid']);
    Route::post('/update-status', [OrderController::class, 'changeStatus'])->name('update-status');
});



