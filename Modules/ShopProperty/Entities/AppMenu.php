<?php

namespace Modules\ShopProperty\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AppMenu extends Model
{
    use HasFactory;

    protected $fillable = ['menu_name', 'menu_icon', 'menu_description', 'menu_slug'];

    protected static function newFactory()
    {
        return \Modules\ShopProperty\Database\factories\AppMenuFactory::new();
    }
}
