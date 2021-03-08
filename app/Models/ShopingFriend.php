<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopingFriend extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','user_to','status'];

    public function follower(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function following(){
        return $this->belongsTo(User::class,'user_to','id');
    }

}