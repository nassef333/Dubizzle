<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarStock extends Model
{
    use HasFactory;

    protected $table = 'car_stock';
    protected $fillable = [
        'car_id',
        'price',
        'old_price',
        'description',
        'status',
        'mileage',
        'fuel_type',
        'gearbox',
    ];
    public function car()
    {
        return $this->belongsTo(Car::class, 'car_id', 'id');
    }
}
