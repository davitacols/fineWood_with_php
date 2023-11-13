<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'product_price',
        'category',
        'shipping_type',
        'date_created',
        'time_created',
        'date_updated',
        'main_image',
        'other_images',
        'inventory',
        'sku',
    ];

    // Define relationships if applicable
    // For example, a product belongs to a category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Define other methods or properties as needed for your application
}

