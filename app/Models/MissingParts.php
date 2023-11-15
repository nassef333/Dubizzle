<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class MissingParts extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $table = 'missing_parts';

    protected $fillable = [
        'user_id',
        'name',
        'message',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
