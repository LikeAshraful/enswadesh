<?php

namespace App\Models\Wishlist;

use App\Models\Product\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Wishlist extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','product_id','shop_id'];

    public function productOfWishlist()
    {
        return $this->belongsTo(Product::class,'product_id','id');
    }
}