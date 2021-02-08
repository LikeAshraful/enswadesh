<?php

namespace App\Models\Location;

use App\Models\Shop\Shop;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class City extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'slug', 'icon'];

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::of($value)->slug('-');
    }

    public function marketsByCity() {

        return $this->hasMany(Market::class, 'city_id');
    }

    public function shops() {
        return $this->hasMany(Shop::class, 'market_id');
    }

    public function getShopsCountAttribute()
    {
        return $this->shops()->count();
    }
}
