<?php

namespace App\Models;

use App\Models\Traits\CarFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

class CarStock extends Model
{
    use HasFactory, CarFilter;

    protected $table = 'car_stock';

    protected $fillable = [
        'car_id',
        'price',
        'old_price',
        'no_passengers',
        'description',
        'status',
        'mileage',
        'fuel_type',
        'gearbox',
    ];
}
