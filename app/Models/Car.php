<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Car extends Model implements HasMedia
{
    use HasFactory, SoftDeletes, InteractsWithMedia;

    protected $table = 'cars';

    protected $fillable = [
        'name',
        'car_series_id',
        'type',
        'description',
        'quantity_available',
        'class'
    ];

    public function carStock()
    {
        return $this->hasMany(CarStock::class);
    }

    public function series()
    {
        return $this->belongsTo(CarSeries::class, 'car_series_id');
    }
}
