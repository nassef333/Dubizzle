<?php

namespace App\Http\Controllers\Cars;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Car;
use App\Models\CarParts;
use App\Models\CarSeries;
use App\Models\CarStock;
use App\Models\Cart;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdvancedSearchController extends Controller
{
    public function index(Request $request)
    {
        $cars = CarStock::query()
            ->withMedia('cover')
            ->filter()
            ->addSelect([
                "car_name" => Car::select("name")->whereColumn("car_stock.car_id", "cars.id"),
                "car_type" => Car::select("type")->whereColumn("car_stock.car_id", "cars.id"),
            ])
            ->paginate(10)
            ->withQueryString();

        return response()->json([
            'cars' => $cars
        ]);
    }

    public function show(Request $request, CarStock $car)
    {
        $cover =  $car->getFirstMedia('cover')?->getUrl();

        // $relatedCars = $this->relatedCars($car->car_id);

        // $car->load('car');

        $images = $car->getMedia('car_photos')->map(function ($media) {
            return $media->getUrl();
        });

        return view("cars.show", compact('car', 'cover', 'images'));
    }



    public function carsPartsSearch(Request $request)
    {
        $parts = CarParts::query()
            ->withMedia('cover')
            ->filter()
            ->addSelect([
                "category_name" => Category::select("name")->whereColumn("car_parts.category_id", "categories.id"),
            ])
            ->paginate(10)
            ->withQueryString();

        return response()->json([
            'parts' => $parts,
        ]);
    }

    public function carPartShow(Request $request, CarParts $part)
    {

        if(Auth::check()) {
            $cart = Cart::where('user_id', Auth::user()->id)->where('part_id', $part->id)->first();
            $cart ? $cartCount = $cart->count : $cartCount = 0;
        }

        $part = CarParts::find($part->id);

        // $relatedParts = $this->relatedParts($part->id);

        $cover =  $part->getFirstMedia('cover')?->getUrl();

        $images = $part->getMedia('part_photos')->map(function ($media) {
            return $media->getUrl();
        });

        if(Auth::check())
            return view("cars.show-part", compact("part", "cartCount", 'images', 'cover'));
        else
            return view("cars.show-part", compact("part", 'images', 'cover'));

    }

    // public function relatedParts($part_id)
    // {
    //     $carPart = CarParts::find($part_id);
    //     // dd($carPart);
    //     $nearestParts = CarParts::where('car_id', $carPart->car_id)
    //         ->latest()
    //         ->take(5)
    //         ->get();


    //     return $nearestParts;
    // }

    public function getBrands(Request $request)
    {
        $brands = Brand::select('id', 'name')->get();

        return response()->json([
            'brands' => $brands
        ]);
    }

    public function getCategories(Request $request)
    {
        $categories = Category::select('id', 'name')->get();

        return response()->json([
            'categories' => $categories
        ]);
    }

    public function getSeries(Request $request)
    {
        $series = CarSeries::where('brand_id', $request->brand_id)->get();

        return response()->json([
            'series' => $series
        ]);
    }
}
