<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Swiper;
use App\Models\Category;

class SwiperController extends Controller
{
    public function index()
    {
        $swipers = Swiper::all();
        return view('admin.swipers.index', compact('swipers'));
    }


    public function create()
    {
        $categories = Category::all();
        return view('admin.swipers.add-swiper', compact('categories'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image',
            'category_id' => 'required'
        ]);
    
        // Store the image in the storage folder
        $imagePath = $request->file('image')->store('swipers', 'public');
    
        // Save the swiper details in the database
        $swiper = Swiper::create([
            'title' => $data['title'],
            'description' => $data['description'],
            'image' => $imagePath,
            'category_id' => $data['category_id']
        ]);
        return redirect()->route('swipers.index')->with('success', 'Swiper created successfully');
    }


    public function destroy(Swiper $swiper)
    {
        $swiper->delete();

        return redirect()->route('swipers.index')->with('success', 'Swiper deleted successfully');
    }
}
