<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CarParts extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'car_parts';
    protected $fillable = [
        'car_id',
        'category_id',
        'price',
        'old_price',
        'description',
        'status',
        'code',
        'count',
        'warranty',
        'sale_price',
        'sale_amount',
    ];
}
