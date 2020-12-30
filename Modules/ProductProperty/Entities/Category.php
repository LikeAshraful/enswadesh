<?php

namespace Modules\ProductProperty\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\ProductProperty\Entities\Category;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'parent_id'
    ];

    public function subcategory(){
        return $this->hasMany(Category::class, 'parent_id','id');
    }

    protected static function newFactory()
    {
        return \Modules\ProductProperty\Database\factories\CategoryFactory::new();
    }
}
