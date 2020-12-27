<?php

namespace Modules\ShopProperty\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\ShopProperty\Entities\City;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Area extends Model
{
    use HasFactory;

    protected $fillable = ['city_id', 'area_name', 'area_icon', 'area_description', 'area_slug'];

    public function cityOfArea() {
        return $this->belongsTo(City::class, 'city_id', 'id');
    }

    protected static function newFactory()
    {
        return \Modules\ShopProperty\Database\factories\AreaFactory::new();
    }
}