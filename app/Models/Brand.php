<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = ['name', 'origin'];

    public function series()
    {
        return $this->hasMany(CarSeries::class);
    }
}
