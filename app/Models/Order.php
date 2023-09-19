<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'status',
        'shipping_address',
        'shipping_method',
        'tracking_number',
        'total_price',
        'shipping_fee',
        'is_done',
        'delivered_on',
        'area_id',
    ];



    public function area()
    {
        return $this->belongsTo(Area::class);
    }
}
