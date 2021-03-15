<?php

namespace App\Models;

use App\Models\Shop\Shop;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ShopSubscribe extends Model
{
    use HasFactory;

    protected $fillable = ['nickname','user_id','shop_id','status'];

    public function subscriber()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function subscribeShop()
    {
        return $this->belongsTo(Shop::class,'shop_id','id');
    }
}
