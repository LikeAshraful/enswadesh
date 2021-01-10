<?php

namespace App\Models\Location;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Market extends Model
{
    use HasFactory;

    protected $fillable = ['thana_id', 'market_name', 'market_address', 'market_description', 'market_slug',  'market_icon',];

    public function thanaOfMarket() {
        return $this->belongsTo(Thana::class, 'thana_id', 'id');
    }
}
