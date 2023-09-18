<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function index()
    {
        $areas = Area::all();
        return view('admin.areas.index', compact('areas'));
    }

    public function create()
    {
        return view('admin.areas.add-area');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
        ]);

        Area::create($validatedData);

        return redirect()->route('area.index')->with('success', 'Area created successfully');
    }

    public function edit(Area $area)
    {
        return view('admin.areas.edit', compact('area'));
    }

    public function update(Request $request, Area $area)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
        ]);

        $area->update($validatedData);

        return redirect()->route('area.index')->with('success', 'Area updated successfully');
    }

    public function destroy(Area $area)
    {
        $area->delete();

        return redirect()->route('area.index')->with('success', 'Area deleted successfully');
    }
}
