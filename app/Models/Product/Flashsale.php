<?php

namespace App\Models\Product;

use App\Models\Product\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Flashsale extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 'start_date', 'start_time', 'end_date', 'end_time'];

    public function product() {
        return $this->belongsTo(Product::class);
    }
}
