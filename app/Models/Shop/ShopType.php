<?php

namespace App\Models\Shop;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ShopType extends Model
{
    use HasFactory;
    protected $fillable = ['shop_type_name', 'shop_type_description', 'shop_type_slug'];

    public function setShopTypeNameAttribute($value)
    {
        $this->attributes['shop_type_name'] = $value;
        $this->attributes['shop_type_slug'] = Str::of($value)->slug('-');
    }
}
