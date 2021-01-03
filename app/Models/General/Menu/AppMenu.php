<?php

namespace App\Models\General\Menu;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppMenu extends Model
{
    use HasFactory;

    protected $fillable = ['menu_name', 'menu_icon', 'menu_description', 'menu_slug'];
}
