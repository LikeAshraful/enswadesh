<?php

namespace App\Models\Location;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Market extends Model
{
    use HasFactory;

    protected $fillable = ['area_id', 'market_name', 'market_address', 'market_description', 'market_slug',  'market_icon',];

    public function setMarketNameAttribute($value)
    {
        $this->attributes['market_name'] = $value;
        $this->attributes['market_slug'] = Str::of($value)->slug('_');
    }

    public function areas() {
        return $this->belongsTo(Area::class, 'area_id', 'id');
    }
}
