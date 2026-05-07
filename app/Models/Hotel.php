<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'language',
        'group_id',
        'is_published',
        'excerpt',
        'content',
        'meta_title',
        'meta_description',
        'image',
        'image_alt',
        'rating',
        'price_range',
        'tag',
        'address',
        'latitude',
        'longitude',
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'rating' => 'decimal:1',
        'latitude' => 'decimal:7',
        'longitude' => 'decimal:7',
    ];
}