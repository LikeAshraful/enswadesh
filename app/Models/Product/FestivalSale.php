<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FestivalSale extends Model
{
    use HasFactory;

    protected $fillable = ['name','product_id', 'start_date', 'start_time', 'end_date', 'end_time'];

    public function product() {
        return $this->belongsTo(Product::class);
    }
}
