<?php

namespace Modules\ShopProperty\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class City extends Model
{
    use HasFactory;

    protected $fillable = ['city_name', 'city_description', 'city_slug', 'city_icon'];

    protected static function newFactory()
    {
        return \Modules\ShopProperty\Database\factories\CityFactory::new();
    }
}
