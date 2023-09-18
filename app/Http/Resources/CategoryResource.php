<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Category;
use App\Models\Product;

class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    
    public function toArray(Request $request): array
    {
        $noProducts = Product::where('category_id', $this->id)->count();

        return [
            'id' => $this->id,
            'name' => $this->name,
            'image' => $this->image,
            'noProducts' => $noProducts,
        ];
    }
}
