<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PricingPackage extends Model
{
    use HasFactory;

    protected $fillable = [
        'category',
        'name',
        'price',
        'period',
        'description',
        'features',
        'is_popular',
        'badge',
        'cta_text',
        'order',
    ];

    protected $casts = [
        'features' => 'array',
        'is_popular' => 'boolean',
        'order' => 'integer',
    ];
}
