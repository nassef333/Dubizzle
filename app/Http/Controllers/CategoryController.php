<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoryResource;
use App\Http\Resources\CategoryProductsResource;
use App\Models\Category;
use App\Models\Brand;
use App\Traits\HttpResponses;
use Illuminate\Http\Request;
use App\Models\Product;

class CategoryController extends Controller
{
    use HttpResponses;

    public function UserCategories()
    {
        $categories = Category::all();
        $brands = Brand::all();
        $results = Product::latest()->take(9)->get();
        return view('user.categories', compact('categories','brands', 'results'));
    }

    public function getCategory($id)
    {
        $categories = Category::all();
        $category = Category::find($id);
        $products = $category->products()->paginate(10);
        return view('user.category-data', compact('categories', 'category', 'products'));
    }



    public function index()
    {
        $categories = Category::paginate(10);
        return view('admin.categories.index', compact('categories'));
    }

    public function search(Request $request)
    {
        $search = $request->input('search');

        $categories = Category::where('name', 'like', "%$search%")
            ->orWhere('description', 'like', "%$search%")
            ->paginate(10);

        // Preserve the search query in the pagination links
        $categories->appends(['search' => $search]);

        return view('admin.categories.index', compact('categories'));
    }

    public function productSearch(Request $request, $category_id)
    {
        $categories = Category::all();
        $category = Category::find($category_id);
        $searchTerm = $request->query('search');

        $products = Product::where('category_id', $category_id)
            ->where(function ($query) use ($searchTerm) {
                $query->where('name', 'like', "%$searchTerm%")
                    ->orWhere('description', 'like', "%$searchTerm%");
            })
            ->paginate(8)
            ->appends(['search' => $searchTerm]);

        return view('user.category-data', compact('products', 'categories', 'category'));
    }



    public function indexApi()
    {
        $category = Category::all();

        return $this->success(CategoryResource::collection($category), 'Request sent successfully.', 200);

    }

    public function show(Category $category)
    {
        return view('categories.show', compact('category'));
    }

    public function showApi($id)
    {
        $category = Category::find($id);
        return $this->success(new CategoryProductsResource($category), 'Request sent successfully.', 200);
    }

    public function create()
    {
        return view('admin.categories.add-category');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:categories',
            'description' => 'nullable|max:255',
            'image' => 'nullable|image',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName(); // Get the original file name
            $imagePath = $image->storeAs('public/images/categories', $imageName); // Store the file with the original name
            $validatedData['image'] = 'images/categories/' . $imageName; // Set the image path in the validated data
        }

        Category::create($validatedData);

        return redirect()->route('category.index')->with('success', 'Category created successfully.');
    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:categories,name,' . $category->id,
            'description' => 'nullable',
            'image' => 'nullable|image',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName(); // Get the original file name
            $imagePath = $image->storeAs('public/images/categories', $imageName); // Store the file with the original name
            $validatedData['image'] = 'images/categories/' . $imageName; // Set the image path in the validated data
        }

        $category->update($validatedData);

        return redirect()->route('category.index')->with('success', 'Category updated successfully.');
    }


    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('category.index')->with('success', 'Category deleted successfully.');
    }

    public function showCategoryProducts($id)
    {
        $category = Category::find($id);
        $products = $category->products;

        return view('admin.categories.category-products', compact('category'));
    }

}
