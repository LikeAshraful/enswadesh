<?php

namespace Modules\ShopProperty\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\ShopProperty\Entities\MarketPlace;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Floor extends Model
{
    use HasFactory;

    protected $fillable = ['market_place_id', 'floor_no', 'floor_note'];

    public function marketPlaceOfFloor() {
        return $this->belongsTo(MarketPlace::class, 'market_place_id', 'id');
    }

    protected static function newFactory()
    {
        return \Modules\ShopProperty\Database\factories\FloorFactory::new();
    }
}