<?php

namespace App\Models\Shop;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopMedia extends Model
{
    use HasFactory;

    protected $fillable = ['shop_id','image'];

}