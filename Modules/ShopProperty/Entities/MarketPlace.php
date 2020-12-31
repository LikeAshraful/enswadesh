<?php

namespace Modules\ShopProperty\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\ShopProperty\Entities\Area;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MarketPlace extends Model
{
    use HasFactory;

    protected $fillable = ['thana_id', 'market_name', 'marketplace_address', 'marketplace_description', 'marketplace_slug',  'marketplace_icon',];

    public function thanaOfMarketPlace() {
        return $this->belongsTo(Thana::class, 'thana_id', 'id');
    }


    protected static function newFactory()
    {
        return \Modules\ShopProperty\Database\factories\MarketPlaceFactory::new();
    }
}
