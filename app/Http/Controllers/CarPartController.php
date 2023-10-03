<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarParts;
use App\Traits\HttpResponses;
use Illuminate\Http\Request;

class CarPartController extends Controller
{
    use HttpResponses;
    public function index(Request $request, $car_id)
    {
        $searchTerm = $request->query('searchTerm');

        if ($searchTerm) return $this->search($request, $car_id);

        $car = Car::find($car_id);
        $carParts = CarParts::where('car_id', $car_id)->paginate(50);
        return view('admin.car-parts.index', compact('car', 'carParts'));
    }

    public function search(Request $request, $car_id)
    {
        $searchTerm = $request->query('searchTerm');
        $cars = CarParts::where('car_id', $car_id)
            ->where(function ($query) use ($searchTerm) {
                $query->where('name', 'like', "%$searchTerm%")
                    ->orWhere('description', 'like', "%$searchTerm%");
            })
            ->paginate(50)
            ->appends(['searchTerm' => $searchTerm]);

            $car = Car::find($car_id);

        return view('admin.car-parts.index', compact('carParts', 'car', 'searchTerm'));
    }

    public function create()
    {
        return view('admin.car-parts.create');
    }

    public function store(Request $request)
    {
        // return $request;
        $validatedData = $request->validate([
            'car_id' => 'required',
            'category_id' => 'required',
            'price' => 'required',
            'old_price' => 'required',
            'description' => 'required',
            'status' => 'required',
            'code' => 'required',
            'count' => 'required',
            'warranty' => 'required',
            'sale_price' => 'required',
            'sale_amount' => 'required',
        ]);

        $carParts = CarParts::create($validatedData);

        return redirect('admin/car/'.$carParts->car_id.'/parts');
    }

    public function edit($id)
    {
        $carParts = CarParts::find($id);
        $car = $carParts->car;

        return view('admin.car-parts.edit', compact('carParts', 'car'));
    }

    public function update(Request $request, $id)
    {
        $carParts = CarParts::find($id);

        $validatedData = $request->validate([
            'car_id' => 'required',
            'price' => 'required',
            'old_price' => 'required',
            'description' => 'required',
            'status' => 'required',
            'code' => 'required',
            'count' => 'required',
            'warranty' => 'required',
            'sale_price' => 'required',
            'sale_amount' => 'required',
        ]);

        $carParts->update($validatedData);

        return redirect('admin/car/'.$request->car_id.'/parts');
    }

    public function destroy($id)
    {
        $carParts = CarParts::find($id);

        $carParts->delete();
        return $this->success('', 'OK.', 201);
    }
}
