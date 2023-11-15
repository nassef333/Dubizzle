<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Car;
use App\Models\CarStock;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Swiper;

class HomeController extends Controller
{
    public function home()
    {
        $categories = Category::all();
        $brands = Brand::all();
        $swipers = Swiper::all();
        $cars = CarStock::query()
            ->with([
                'media' => function ($q) {
                    $q->where('collection_name', 'cover');
                },
            ])
            ->addSelect([
                'car_name' => Car::select('name')->whereColumn('car_id', 'cars.id')
            ])
            ->latest()
            ->limit(10)
            ->get();

        return view('home', compact('categories', 'swipers', 'cars', 'brands'));
    }
}
