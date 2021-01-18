<?php

namespace App\Models\Location;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class City extends Model
{
    use HasFactory;

    protected $fillable = ['city_name', 'city_description', 'city_slug', 'city_icon'];

    public function setCityNameAttribute($value)
    {
        $this->attributes['city_name'] = $value;
        $this->attributes['city_slug'] = Str::of($value)->slug('_');
    }
}
