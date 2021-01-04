<?php

namespace App\Models\Shop;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopType extends Model
{
    use HasFactory;
    protected $fillable = ['shop_type_name', 'shop_type_description', 'shop_type_slug'];
}