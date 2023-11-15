<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "part_id",
        "count",
    ];

    public function part()
    {
        return $this->belongsTo(CarParts::class, 'part_id', 'id');
    }
}
