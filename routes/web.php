<?php

use App\Http\Controllers\Cars\AdvancedSearchController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\Auth\ProfileController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CarPartController;
use App\Http\Controllers\Cars\MissingPartsController;
use App\Http\Controllers\CarSeriesController;
use App\Http\Controllers\CarStockController;
use App\Http\Controllers\CartController;
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


Route::get('/', [HomeController::class, 'home'])->name('home');

//profile
Route::middleware("auth")->group(function () {
    Route::controller(ProfileController::class)->group(function () {
        Route::get('/profile', 'edit')->name('profile.edit');
        Route::patch('/profile', 'update')->name('profile.update');
    });
});

//add to cart
Route::group(['middleware' => 'auth'], function () {
    Route::post('addToCart', [CartController::class, 'store'])->name('addToCart');
    Route::get('checkout', [CartController::class, 'myCart'])->name('checkout');
    Route::post('updateCartCount', [CartController::class, 'updateCartCount'])->name('updateCartCount');
    Route::post('removeCartItem', [CartController::class, 'removeCartItem'])->name('removeCartItem');
    Route::get('checkout/addressInfo', [CartController::class, 'addressInfo'])->name('addressInfo');
    Route::post('PlaceOrder', [OrderController::class, 'PlaceOrder'])->name('PlaceOrder');
});

//advanced search
Route::prefix("cars")->as("cars.")->group(function () {
    Route::view("advanced-search", "cars.advanced-search")->name('advanced-search');
    Route::get("{car}/details", [AdvancedSearchController::class, "show"])->name('car_details');

    Route::view("advanced-search-parts", "cars.advanced-search-parts")->name('advanced-search-parts');
    Route::get("/parts/{part}/details", [AdvancedSearchController::class, "carPartShow"])->name('part_details');
});

//static views
Route::view("about", "site.about")->name('about');
// Route::view("contact", "site.contact")->name('contact');
Route::view("privacy-policy", "site.refund")->name('privacy_policy');
Route::view("faq", "site.faq")->name('faq');


//guest user Routes
Route::get('product/{id}', [ProductController::class, 'show']);
Route::get('category/{id}', [CategoryController::class, 'getCategory'])->name('user.category.products');
Route::get('search-category-products/{tracking_number}', [CategoryController::class, 'productSearch'])->name('category.products.search');
Route::get('brand/{id}', [BrandController::class, 'getBrand']);
Route::get('order/search', [OrderController::class, 'searchOrder']);
Route::post('tracking-order/{id}', [OrderController::class, 'trackingOrder'])->name('tracking.order');
Route::get('/advanced-search', [ProductController::class, 'advancedSearch'])->name('products.advanced_search');

//Login & Register Routes
Route::group(["middleware" => "guest"], function () {
    Route::view('login', 'user.auth.login')->name('user.login');
    Route::post('loginRequest', [AuthController::class, 'login'])->name('login.submit');

    Route::view('register', 'user.auth.register')->name('user.register');
    Route::post('registerRequest', [AuthController::class, 'register'])->name('register.submit');

    Route::view('admin/login', 'admin.auth.login')->name('admin.login');
    Route::post('admin/loginRequest', [AuthController::class, 'adminLogin'])->name('admin.login.submit');
});

//admin login
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {

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
    Route::resource('brands', BrandController::class);

    //carSeries
    Route::get('brands/{brand_id}/series', [CarSeriesController::class, 'index']);
    Route::resource('car-series', CarSeriesController::class);
    Route::get('car-series/create/{brand_id}', [CarSeriesController::class, 'create']);

    //Cars
    Route::get('series/{series_id}/cars', [CarController::class, 'index']);
    Route::resource('car', CarController::class);
    Route::get('car/create/{series_id}', [CarController::class, 'create']);

    //stock
    Route::get('car/{car_id}/stock', [CarStockController::class, 'index']);
    Route::resource('stock', CarStockController::class);
    Route::get('stock/create/{car_id}', [CarStockController::class, 'create']);

    //stock
    Route::get('car/{car_id}/parts', [CarPartController::class, 'index']);
    Route::resource('parts', CarPartController::class);
    Route::get('parts/create/{car_id}', [CarPartController::class, 'create']);
    Route::get('/missing-parts', [CarPartController::class, 'partsRequest'])->name('partsRequest');
    Route::get('/request/{part_id}/delete', [CarPartController::class, 'deleteRequest'])->name('deleteRequest');


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

Auth::routes();
