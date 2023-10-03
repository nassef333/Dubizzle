<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\CarSeries;
use Illuminate\Http\Request;

class CarSeriesController extends Controller
{
    public function index(Request $request, $brand_id)
    {
        $searchTerm = $request->query('searchTerm');

        if ($searchTerm) return $this->search($request, $brand_id);

        $brand = Brand::find($brand_id);
        $series = CarSeries::where('brand_id', $brand_id)->paginate(50);
        return view('admin.car-series.index', compact('series', 'brand'));
    }

    public function search(Request $request, $brand_id)
    {
        $searchTerm = $request->query('searchTerm');
        $series = CarSeries::where('brand_id', $brand_id)
            ->where(function ($query) use ($searchTerm) {
                $query->where('name', 'like', "%$searchTerm%")
                    ->orWhere('description', 'like', "%$searchTerm%");
            })
            ->paginate(50)
            ->appends(['searchTerm' => $searchTerm]);

        $brand = Brand::find($brand_id);

        return view('admin.car-series.index', compact('searchTerm', 'series', 'brand'));
    }

    public function create()
    {
        return view('admin.car-series.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required',
            'brand_id' => 'required',
        ]);

        $carSeries = CarSeries::create($validatedData);

        return redirect('admin/brands/'.$carSeries->brand_id.'/series');
    }

    public function edit(CarSeries $carSeries)
    {
        return view('admin.car-series.edit', compact('carSeries'));

    }

    public function update(Request $request, CarSeries $carSeries)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required',
        ]);

        $carSeries->update($validatedData);

        return redirect('admin/brands/'.$carSeries->brand_id.'/series');
    }

    public function destroy(CarSeries $carSeries)
    {
        $carSeries->delete();

        return redirect()->route('car-series.index')->with('success', 'Brand deleted successfully');
    }
}
