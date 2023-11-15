<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductIndexResource;
use App\Http\Resources\ProductShowResource;
use App\Models\Category;
use App\Models\Product;
use App\Models\Brand;
use App\Traits\HttpResponses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
class ProductController extends Controller
{
    use HttpResponses;

    public function index()
    {
        $products = Product::paginate(10);
        return view('admin.products.index', compact('products'));
    }

    public function advancedSearch(Request $request)
    {
        $categories = Category::all();
        $brands = Brand::all();
        $query = Product::query();

        // Select category
        if ($request->has('category_id') && $request->category_id != "") {
            $query->where('category_id', $request->input('category_id'));
        }

        // Search by product name
        if ($request->has('name') && $request->name != "") {
            $query->where('name', 'like', '%' . $request->input('name') . '%');
        }

        // Select brand
        if ($request->has('brand_id') && $request->brand_id != "") {
                $query->where('brand_id',  $request->input('brand_id'));
        }

        // Filter by price
        if ($request->has('min_price') && $request->min_price != "") {
            $query->where('price', '>=', $request->input('min_price'));
        }

        if ($request->has('max_price') && $request->max_price != "") {
            $query->where('price', '<=', $request->input('max_price'));
        }

        // Sort by product name, price, and rate
        $sortBy = $request->input('sort_by', 'name');
        $sortOrder = $request->input('sort_order', 'asc');

        switch ($sortBy) {
            case 'name':
                $query->orderBy('name', $sortOrder);
                break;
            case 'price':
                $query->orderBy('price', $sortOrder);
                break;
            case 'rate':
                $query->orderBy('rate', $sortOrder);
                break;
            default:
                $query->orderBy('name', 'asc');
                break;
        }

        $results = $query->paginate(18);

        return view('user.advanced-search', compact('results', 'categories', 'brands'));
    }



    public function indexApi(Request $request)
    {
        $perPage = $request->query('per_page', 4);
        $products = Product::paginate($perPage);

        return ProductIndexResource::collection($products);
    }

    public function show($product)
    {
        $categories = Category::all();
        $product = Product::find($product);
        $products = Product::where('category_id', $product->category_id)->where('brand_id', '$product->brand_id')->take(8)->get();
        if ($products->count() < 8) {
            $products = Product::where('category_id', $product->category_id)->take(8)->get();
        }
        if ($products->count() < 8) {
            $products = Product::take(8)->get();
        }
        return view('user.product-details', compact('product', 'categories', 'products'));
    }

    public function create()
    {
        $categories = Category::all();
        $brands = Brand::all();
        return view('admin.products.add-product', compact('categories', 'brands'));
    }

    public function store(Request $request)
    {
        // return $request;
        // dd($request);
        $request['category_id'] = (integer)($request['category_id']);

        $validatedData = $request->validate([
            'name' => 'required',
            'brand_id' => 'required',
            'weight' => 'required',
            'dimensions' => 'required',
            'category_id' => 'required|integer|exists:categories,id',
            'description' => 'required',
            'quantity_available' => 'required|integer|min:0',
            'image.*' => 'required|image',
            'price' => 'required|numeric|min:0',
            'rate' => 'required|numeric|min:0|max:5',
        ]);

        if ($request->hasFile('image')) {
            $imagePaths = [];
            foreach ($request->file('image') as $image) {
                $imagePath = $image->store('images/products', 'public');
                $imagePaths[] = str_replace('public/', '', $imagePath);
            }
            $validatedData['image'] = implode(',', $imagePaths);
        }


        Product::create($validatedData);
        return redirect()->route('product.index')->with('success', 'Product created successfully.');
    }


    public function showApi(Product $product)
    {
        return $this->success(new ProductShowResource($product), 'Request sent successfully.', 200);
    }

    public function edit(Product $product)
    {
        $categories = Category::all();
        $brands = Brand::all();
        return view('admin.products.edit', compact('product', 'categories', 'brands'));
    }

    public function update(Request $request, Product $product)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'brand_id' => 'required',
            'weight' => 'nullable',
            'dimensions' => 'nullable',
            'category_id' => 'required|exists:categories,id',
            'description' => 'nullable',
            'quantity_available' => 'required|integer|min:0',
            'image.*' => 'required|image',
            'price' => 'required|numeric|min:0',
            'rate' => 'nullable|numeric|min:0|max:5',
        ]);

        if ($request->hasFile('image')) {
            $imagePaths = [];
            foreach ($request->file('image') as $image) {
                $imagePath = $image->store('images/products', 'public');
                $imagePaths[] = str_replace('public/', '', $imagePath);
            }
            $validatedData['image'] = implode(',', $imagePaths);
        }

        $product->update($validatedData);

        return redirect()->route('product.index')->with('success', 'Category updated successfully.');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('product.index')->with('success', 'Product deleted successfully.');
    }

    public function search(Request $request)
    {
        $searchTerm = $request->query('search');
        $products = Product::where('name', 'like', "%$searchTerm%")
            ->orWhere('description', 'like', "%$searchTerm%")
            ->paginate(10)
            ->appends(['search' => $searchTerm]);

        return view('admin.products.index', compact('products'));
    }

    public function faq()
    {
        $categories = Category::all();
        $brands = Brand::all();

        return view('user.faq', compact('brands', 'categories'));
    }

    public function aboutUs()
    {
        $categories = Category::all();
        $brands = Brand::all();

        return view('user.about-us', compact('categories', 'brands'));
    }
}
