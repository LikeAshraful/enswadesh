<?php

namespace App\Models\Location;

use App\Models\Shop\Shop;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Market extends Model
{
    use HasFactory;

    protected $fillable = ['city_id', 'area_id', 'name', 'address', 'description', 'slug',  'icon'];

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::of($value)->slug('-');
    }

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id', 'id');
    }

    public function areas()
    {
        return $this->belongsTo(Area::class, 'area_id', 'id');
    }

    public function shops()
    {
        return $this->hasMany(Shop::class, 'market_id');
    }

    public function getShopsCountAttribute()
    {
        return $this->shops()->count();
    }

    public function getShopsFloorAttribute()
    {
        return $this->shops()->groupBY('floor_id')->count();
    }
}
