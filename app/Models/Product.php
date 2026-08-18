<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'description',
        'category',
        'price',
        'stock',
        'views',
        'image',
        'is_active',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'stock' => 'integer',
        'views' => 'integer',
        'is_active' => 'boolean',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function orderItems(): HasMany
    {
        return $this->hasMany(OrderItem::class, 'product_name', 'name');
    }

    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }
}