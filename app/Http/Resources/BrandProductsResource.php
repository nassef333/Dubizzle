<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Category;
use App\Models\Product;

class BrandProductsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $products = Product::where('brand_id', $this->id)->paginate(10);
        $noProducts = Product::where('brand_id', $this->id)->count();

        return [
            'id' => $this->id,
            'name' => $this->name,
            'noProducts' => $noProducts,
            'products' => $products,
        ];
    }
}
