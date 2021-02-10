<?php

namespace App\Models\General\Category;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'slug',
        'icon',
        'thumbnail',
        'level',
        'shop_id',
        'type',
        'user_id',
        'status',
        'parent_id'
    ];

    public function createdBy(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function subcategory(){
        return $this->hasMany(Category::class, 'parent_id','id');
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::of($value)->slug('-');
    }

}