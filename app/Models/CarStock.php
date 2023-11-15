<?php

namespace App\Models;

use App\Models\Traits\CarFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class CarStock extends Model implements HasMedia
{
    use HasFactory, CarFilter, InteractsWithMedia;

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
        'class',
    ];

    public function car()
    {
        return $this->belongsTo(Car::class);
    }

    public function scopeWithMedia($query, $collectionName = 'default')
    {
        return $query->with(['media' => function ($mediaQuery) use ($collectionName) {
            $mediaQuery->where('collection_name', $collectionName);
        }]);
    }
}
