<?php

namespace App\Models\Location;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Floor extends Model
{
    use HasFactory;
    protected $fillable = ['market_id', 'floor_no', 'floor_note'];

    public function marketOfFloor() {
        return $this->belongsTo(Market::class, 'market_id', 'id');
    }
}
