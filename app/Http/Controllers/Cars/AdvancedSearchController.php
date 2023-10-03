<?php

namespace App\Http\Controllers\Cars;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\CarStock;
use Illuminate\Http\Request;

class AdvancedSearchController extends Controller
{
    public function index(Request $request)
    {
        $cars = CarStock::query()
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


        // return view("cars.advanced-search", compact("cars"));
    }

    public function carsSearch(Request $request)
    {
    }

    public function carsPartsSearch(Request $request)
    {
    }
}
