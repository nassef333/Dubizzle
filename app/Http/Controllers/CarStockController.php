<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarStock;
use App\Traits\HttpResponses;
use Illuminate\Http\Request;

class CarStockController extends Controller
{
    use HttpResponses;

    public function index(Request $request, $car_id)
    {
        $searchTerm = $request->query('searchTerm');

        if ($searchTerm) return $this->search($request, $car_id);

        $car = Car::find($car_id);
        $carStock = CarStock::where('car_id', $car_id)->paginate(50);
        return view('admin.car-stock.index', compact('car', 'carStock'));
    }

    public function search(Request $request, $car_id)
    {
        $searchTerm = $request->query('searchTerm');
        $cars = CarStock::where('car_id', $car_id)
            ->where(function ($query) use ($searchTerm) {
                $query->where('name', 'like', "%$searchTerm%")
                    ->orWhere('description', 'like', "%$searchTerm%");
            })
            ->paginate(50)
            ->appends(['searchTerm' => $searchTerm]);

        $car = Car::find($car_id);

        return view('admin.car-stock.index', compact('carStock', 'car', 'searchTerm'));
    }

    public function create()
    {
        return view('admin.car-stock.create');
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'car_id' => 'required',
            'price' => 'required',
            'old_price' => '',
            'description' => 'required',
            'status' => 'required',
            'mileage' => 'required',
            'fuel_type' => 'required',
            'gearbox' => 'required',
            'no_passengers' => 'required',
            'cover' => 'required',
            'images' => 'required',
            'class' => 'required',
        ]);

        $carStock = CarStock::create($validatedData);

        $carStock->addMediaFromRequest('cover')->toMediaCollection('cover');

        $carStock->addMultipleMediaFromRequest(['images'])->each(function ($fileAdder) {
            $fileAdder->toMediaCollection('car_photos');
        });


        return redirect('admin/car/' . $carStock->car_id . '/stock');
    }

    public function edit($id)
    {
        $carStock = CarStock::find($id);
        $car = $carStock->car;

        return view('admin.car-stock.edit', compact('carStock', 'car'));
    }

    public function update(Request $request, $id)
    {
        $carStock = CarStock::find($id);

        $validatedData = $request->validate([
            'car_id' => 'required',
            'price' => 'required',
            'old_price' => 'required',
            'description' => 'required',
            'status' => 'required',
            'mileage' => 'required',
            'fuel_type' => 'required',
            'gearbox' => 'required',
            'cover' => 'nullable',
            'images' => 'nullable',
            'no_passengers' => 'required',

        ]);


        if ($request->has("cover")) {

            $carStock->clearMediaCollection('cover');

            $carStock->addMediaFromRequest('cover')->toMediaCollection('cover');
        }

        if ($request->has("images")) {

            $carStock->clearMediaCollection('car_photos');

            $carStock->addMultipleMediaFromRequest(['images'])->each(function ($fileAdder) {
                $fileAdder->toMediaCollection('car_photos');
            });
        }

        $carStock->update($validatedData);

        return redirect('admin/car/' . $request->car_id . '/stock');
    }

    public function destroy($id)
    {
        $carStock = CarStock::find($id);

        $carStock->delete();
        return $this->success('', 'OK.', 201);
    }
}
