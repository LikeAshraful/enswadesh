<?php

namespace Modules\ShopProperty\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Shop extends Model
{
    use HasFactory;

    protected $fillable = ['shop_owner_id', 'city_id', 'area_id', 'thana_id', 'market_place_id', 'floor_id', 'shop_no', 'shop_name',
     'shop_phone', 'shop_email', 'shop_fax', 'shop_slug', 'shop_cover_image', 'shop_icon', 'shop_type', 'shop_description', 'meta_title_shop',
      'meta_keywords_shop', 'meta_description_shop', 'meta_og_image_shop', 'meta_og_url_shop',];

    public function cityOfShop() {
        return $this->belongsTo(City::class, 'city_id', 'id');
    }

    public function areaOfShop() {
        return $this->belongsTo(Area::class, 'area_id', 'id');
    }

    public function thanaOfShop() {
        return $this->belongsTo(Thana::class, 'thana_id', 'id');
    }

    public function marketOfShop() {
        return $this->belongsTo(MarketPlace::class, 'market_place_id', 'id');
    }

    public function floorOfShop() {
        return $this->belongsTo(Floor::class, 'floor_id', 'id');
    }

    protected static function newFactory()
    {
        return \Modules\ShopProperty\Database\factories\ShopFactory::new();
    }
}