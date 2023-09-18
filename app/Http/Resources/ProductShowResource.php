<?php

namespace App\Http\Resources;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductShowResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $category = Category::find($this->category_id);
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'brand' => $this->brand,
            'image' => $this->image,
            'price' => $this->price,
            'old_price' => $this->old_price,
            'weight' => $this->weight,
            'dimensions' => $this->dimensions,
            'rate' => $this->rate,
            'quantity_available' => $this->quantity_available,
            'created_at' => $this->created_at,
            'category' => $category,
        ];
    }
}
