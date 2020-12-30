<?php

namespace Modules\ProductProperty\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [];
    
    protected static function newFactory()
    {
        return \Modules\ProductProperty\Database\factories\CategoryFactory::new();
    }
}
