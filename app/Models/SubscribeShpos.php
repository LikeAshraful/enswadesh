<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubscribeShpos extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','shop_id','status'];

    public function subscribers()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
