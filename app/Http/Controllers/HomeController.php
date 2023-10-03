<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Swiper;

class HomeController extends Controller
{
    public function home()
    {
        $categories = Category::all();
        $swipers = Swiper::all();
        // return $swipers;
        return view('user.index', compact('categories', 'swipers'));
    }
}
