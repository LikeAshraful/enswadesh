<?php

namespace App\Models\Location;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;
    protected $fillable = ['city_id', 'area_name', 'area_icon', 'area_description', 'area_slug'];

    public function cityOfArea() {
        return $this->belongsTo(City::class, 'city_id', 'id');
    }
}
