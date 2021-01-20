<?php

namespace App\Models\General\Menu;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AppMenu extends Model
{
    use HasFactory;

    protected $fillable = ['menu_name', 'menu_icon', 'menu_description', 'menu_slug'];

    public function setMenuNameAttribute($value)
    {
        $this->attributes['menu_name'] = $value;
        $this->attributes['menu_slug'] = Str::of($value)->slug('-');
    }
}
