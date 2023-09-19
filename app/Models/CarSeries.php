<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarSeries extends Model
{
    use HasFactory;

    protected $table = 'car_series';
    protected $fillable = [
        'name',
        'description',
        'brand_id',
    ];
}
