<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSize extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 'size_id', 'size', 'product_color_id', 'price', 'discount', 'discount_type', 'stocks', 'offer',];
}
