<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InviteFriend extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','contact_type','contact_field','token','status'];

    protected $appends = ['referral_link'];

    public function getReferralLinkAttribute()
    {
        return $this->referral_link = route('register', ['ref' => $this->token]);
    }

    public function referrer()
    {
        return $this->belongsTo(ShopingFriend::class, 'user_id', 'id');
    }

    public function referrals()
    {
        return $this->hasMany(ShopingFriend::class, 'user_id', 'id');
    }
}