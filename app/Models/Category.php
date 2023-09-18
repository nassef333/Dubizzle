<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Category;
use App\Models\Product;

class Category extends Model
{
    use HasFactory, SoftDeletes;
    protected  $fillable = [
        'name', 'description', 'image',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function getProductCount()
    {
        return $this->products()->count();
    }

}
