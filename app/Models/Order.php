<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'status',
        'shipping_address',
        'location_cdn',
        'shipping_method',
        'customer_phone',
        'tracking_number',
        'transaction_status',
        'total_price',
        'customer_name',
        'customer_email',
        'shipping_fee',
        'delivered_on',
        'area_id',
        'is_done',
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('quantity');
    }

    public function area()
    {
        return $this->belongsTo(Area::class);
    }
}
