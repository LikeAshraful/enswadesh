<?php

namespace Modules\ShopProperty\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\ShopProperty\Entities\Area;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Thana extends Model
{
    use HasFactory;

    protected $fillable = ['area_id', 'thana_name', 'thana_icon', 'thana_description', 'thana_slug'];

    public function areaOfthana() {
        return $this->belongsTo(Area::class, 'area_id', 'id');
    }

    protected static function newFactory()
    {
        return \Modules\ShopProperty\Database\factories\ThanaFactory::new();
    }
}