<?php

namespace Modules\ShopProperty\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\ShopProperty\Entities\Area;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MarketPlace extends Model
{
    use HasFactory;

    protected $fillable = ['area_id', 'market_name', 'marketplace_address', 'marketplace_description', 'marketplace_slug',  'marketplace_icon',];

    public function areaOfMarketPlace() {
        return $this->belongsTo(Area::class, 'area_id', 'id');
    }


    protected static function newFactory()
    {
        return \Modules\ShopProperty\Database\factories\MarketPlaceFactory::new();
    }
}