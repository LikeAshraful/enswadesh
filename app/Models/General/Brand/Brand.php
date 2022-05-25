<?php

namespace App\Models\General\Brand;

use App\Models\User;
use App\Models\Shop\Shop;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Brand extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'slug',
        'icon',
        'user_id',
        'shop_id'
    ];


    public function createdBy(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function shopByID()
    {
        return $this->belongsTo(Shop::class,'shop_id','id');
    }
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::of($value)->slug('-');
    }

}