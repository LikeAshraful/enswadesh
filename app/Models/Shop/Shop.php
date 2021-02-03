<?php

namespace App\Models\Shop;

use App\Models\User;
use Illuminate\Support\Str;
use App\Models\Location\Area;
use App\Models\Location\City;
use App\Models\Shop\ShopType;
use App\Models\Location\Floor;
use App\Models\Location\Thana;
use App\Models\Location\Market;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Shop extends Model
{
    use HasFactory;

    protected $fillable = ['shop_owner_id', 'city_id', 'area_id', 'thana_id', 'market_id', 'floor_no', 'shop_no', 'shop_name',
     'shop_phone', 'shop_email', 'shop_fax', 'shop_slug', 'shop_cover_image', 'shop_logo', 'shop_type_id', 'shop_description', 'meta_title_shop',
      'meta_keywords_shop', 'meta_description_shop', 'meta_og_image_shop', 'meta_og_url_shop'];

    public function setShopNameAttribute($value)
    {
        $this->attributes['shop_name'] = $value;
        $this->attributes['shop_slug'] = Str::of($value)->slug('-');
    }

    public function shopOwner() {
        return $this->belongsTo(User::class, 'shop_owner_id', 'id');
    }

    public function city() {
        return $this->belongsTo(City::class, 'city_id', 'id');
    }

    public function area() {
        return $this->belongsTo(Area::class, 'area_id', 'id');
    }

    public function thana() {
        return $this->belongsTo(Thana::class, 'thana_id', 'id');
    }

    public function market() {
        return $this->belongsTo(Market::class, 'market_id', 'id');
    }

    public function floor() {
        return $this->belongsTo(Floor::class, 'floor_id', 'id');
    }

    public function shopType() {
        return $this->belongsTo(ShopType::class, 'shop_type_id', 'id');
    }

}
