<?php

namespace Modules\Shop\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class City extends Model
{
    use HasFactory;

    protected $fillable = ['city_name', 'city_icon', 'city_description', 'city_slug'];

    protected static function newFactory()
    {
        return \Modules\Shop\Database\factories\CityFactory::new();
    }
}
