<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductIndexResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'brand' => $this->brand->name,
            'image' => $this->image,
            'price' => $this->price,
            'old_price' => $this->old_price,
            'rate' => $this->rate,
            'created_at' => $this->create_at,
        ];
    }
}
