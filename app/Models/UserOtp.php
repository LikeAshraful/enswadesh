<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserOtp extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'otp',
        'otp_verified_at',
        'access_token'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
