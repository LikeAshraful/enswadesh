<?php

namespace App\Models\Location;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Area extends Model
{
    use HasFactory;
    protected $fillable = ['city_id', 'area_name', 'area_icon', 'area_description', 'area_slug'];

    public function setAreaNameAttribute($value)
    {
        $this->attributes['area_name'] = $value;
        $this->attributes['area_slug'] = Str::of($value)->slug('-');
    }

    public function cities()
    {
        return $this->belongsTo(City::class, 'city_id', 'id');
    }
}
