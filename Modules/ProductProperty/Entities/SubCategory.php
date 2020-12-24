<?php

namespace Modules\ProductProperty\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'main_category_id',
        'sub_category_name',
        'sub_category_slug'
    ];

    public function SubWithMainCateory()
    {
        return $this->belongsTo(MainCategory::class);
    }
    
    protected static function newFactory()
    {
        return \Modules\ProductProperty\Database\factories\SubCategoryFactory::new();
    }
}
