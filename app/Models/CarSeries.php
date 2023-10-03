<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CarSeries extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'car_series';
    protected $fillable = [
        'name',
        'description',
        'brand_id',
    ];
}
