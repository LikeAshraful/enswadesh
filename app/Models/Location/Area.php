<?php

namespace App\Models\Location;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Area extends Model
{
    use HasFactory;
    protected $fillable = ['city_id', 'name', 'icon', 'description', 'slug'];

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::of($value)->slug('-');
    }

    public function cities()
    {
        return $this->belongsTo(City::class, 'city_id', 'id');
    }

    public function areaMarkets()
    {
        return $this->hasMany(Market::class, 'area_id');
    }
}
