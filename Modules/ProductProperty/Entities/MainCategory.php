<?php

namespace Modules\ProductProperty\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\ProductProperty\Entities\SubCategory;

class MainCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'main_category_name',
        'main_category_slug',
        'icon'
    ];

    public function mainWithSubCategories()
    {
        return $this->hasMany(SubCategory::class);
    }
    
    protected static function newFactory()
    {
        return \Modules\ProductProperty\Database\factories\MainCategoryFactory::new();
    }
}
