<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Swiper;

class HomeController extends Controller
{
    public function home()
    {
        $categories = Category::all();
        $swipers = Swiper::all();
        $products = Product::latest()->take(8)->get();
        return view('user.index', compact('categories', 'swipers', 'products'));
    }
}
