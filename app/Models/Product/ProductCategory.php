<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;
use App\Models\General\Category\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductCategory extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'product_id'];

    public function category() {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
