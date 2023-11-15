<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarSeries;
use App\Traits\HttpResponses;
use Illuminate\Http\Request;

class CarController extends Controller
{
    use HttpResponses;

    public function index(Request $request, $car_series_id)
    {
        $searchTerm = $request->query('searchTerm');

        if ($searchTerm) return $this->search($request, $car_series_id);

        $carsSeries = CarSeries::find($car_series_id);
        $cars = Car::where('car_series_id', $car_series_id)->paginate(50);
        return view('admin.cars.index', compact('carsSeries', 'cars'));
    }

    public function search(Request $request, $car_series_id)
    {
        $searchTerm = $request->query('searchTerm');
        $cars = Car::where('car_series_id', $car_series_id)
            ->where(function ($query) use ($searchTerm) {
                $query->where('name', 'like', "%$searchTerm%")
                    ->orWhere('description', 'like', "%$searchTerm%");
            })
            ->paginate(50)
            ->appends(['searchTerm' => $searchTerm]);

        $carsSeries = CarSeries::find($car_series_id);

        return view('admin.cars.index', compact('carsSeries', 'cars', 'searchTerm'));
    }

    public function create()
    {
        return view('admin.cars.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required',
            'car_series_id' => 'required',
        ]);

        $car = Car::create($validatedData);

        return redirect('admin/series/' . $car->car_series_id . '/cars');
    }

    public function edit(Car $car)
    {
        return view('admin.cars.edit', compact('car'));
    }

    public function update(Request $request, Car $car)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required',
        ]);

        $car->update($validatedData);

        return redirect('admin/series/' . $car->car_series_id . '/cars');
    }

    public function destroy(Car $car)
    {
        $car->delete();

        return $this->success('', 'OK.', 201);
    }
}
