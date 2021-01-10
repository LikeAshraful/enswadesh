<?php

namespace App\Models\Location;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thana extends Model
{
    use HasFactory;
    
    protected $fillable = ['area_id', 'thana_name', 'thana_icon', 'thana_description', 'thana_slug'];

    public function areaOfthana() {
        return $this->belongsTo(Area::class, 'area_id', 'id');
    }
}
