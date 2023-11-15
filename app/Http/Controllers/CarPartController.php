<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarParts;
use App\Models\MissingParts;
use App\Traits\HttpResponses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
            'name' => 'required',
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
            'cover' => 'required',
            'images' => 'required',
        ]);

        $carParts = CarParts::create($validatedData);


        $carParts->addMediaFromRequest('cover')->toMediaCollection('cover');

        $carParts->addMultipleMediaFromRequest(['images'])->each(function ($fileAdder) {
            $fileAdder->toMediaCollection('part_photos');
        });

        return redirect('admin/car/' . $carParts->car_id . '/parts');
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
            'cover' => 'nullable',
            'images' => 'nullable',
        ]);

        if ($request->has("cover")) {

            $carParts->clearMediaCollection('cover');

            $carParts->addMediaFromRequest('cover')->toMediaCollection('cover');
        }

        if ($request->has("images")) {

            $carParts->clearMediaCollection('part_photos');

            $carParts->addMultipleMediaFromRequest(['images'])->each(function ($fileAdder) {
                $fileAdder->toMediaCollection('part_photos');
            });
        }


        $carParts->update($validatedData);

        return redirect('admin/car/' . $request->car_id . '/parts');
    }

    public function destroy($id)
    {
        $carParts = CarParts::find($id);

        $carParts->delete();
        return $this->success('', 'OK.', 201);
    }

    public function partsRequest(Request $request)
    {
        $searchTerm = $request->query('searchTerm');

        if ($searchTerm) return $this->requestsSearch($request);


        $requests = DB::table('missing_parts')
            ->select('missing_parts.*', 'users.name AS username', 'users.phone AS userphone')
            ->join('users', 'missing_parts.user_id', '=', 'users.id')
            ->paginate(20);

        // return $requests;
        return view('admin.partsRequests.index', compact('requests'));
    }


    public function requestsSearch(Request $request)
    {
        $searchTerm = $request->query('searchTerm');

        $requests = MissingParts::with('user')
            ->where(function ($query) use ($searchTerm) {
                $query->where('missing_parts.name', 'like', "%$searchTerm%")
                    ->orWhere('missing_parts.message', 'like', "%$searchTerm%");
            })
            ->paginate(20)
            ->appends(['searchTerm' => $searchTerm]);

        return view('admin.partsRequests.index', compact('requests'));
    }

    public function deleteRequest($id)
    {
        $request = MissingParts::find($id);
        $request->delete();
        return $this->success('', 'Request Deleted Successfully.', 200);
    }
}
