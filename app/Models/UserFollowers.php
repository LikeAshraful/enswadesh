<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserFollowers extends Model
{
    use HasFactory;

    protected $fillable = ['follower','following'];

    public function followers()
    {
        return $this->belongsTo(User::class,'follower','id');
    }

    public function following()
    {
        return $this->belongsTo(User::class,'following','id');
    }
}