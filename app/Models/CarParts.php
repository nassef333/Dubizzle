<?php

namespace App\Models;

use App\Models\Traits\PartFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class CarParts extends Model implements HasMedia
{
    use HasFactory, PartFilter, InteractsWithMedia;

    protected $table = 'car_parts';

    protected $fillable = [
        'car_id',
        'category_id',
        'price',
        'old_price',
        'name',
        'description',
        'status',
        'code',
        'count',
        'warranty',
        'sale_price',
        'sale_amount',
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
