<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['ref', 'name', 'slug', 'shop_id', 'user_id', 'brand_id',
                            'thumbnail_id', 'can_bargain', 'product_type', 'refund_policy', 'service_policy', 'description',
                            'offers', 'total_stocks',
                          ];

    public function setAreaNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::of($value)->slug('-');
    }
}
