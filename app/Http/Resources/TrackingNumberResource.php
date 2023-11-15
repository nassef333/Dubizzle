<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TrackingNumberResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "customer_name" => $this->customer_name,
            "shipping_address" => $this->shipping_address,
            "status" => $this->status,
            "total_price" => $this->status,
            "transaction_status" => $this->transaction_status,
            "tracking_number" => $this->tracking_number,
        ];
    }
}
