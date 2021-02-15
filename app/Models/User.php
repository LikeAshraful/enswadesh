<?php

namespace App\Models;

use App\Models\Role;
use App\Models\Profile;
use App\Models\UserOtp;
use App\Models\VendorStaff;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;
    use HasApiTokens;
    use HasFactory;

    protected $fillable = [
        'name',
        'role_id',
        'phone_number',
        'email',
        'password',
        'status',
        'suspend',
        'last_login_at'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function staffs()
    {
        return $this->hasMany(VendorStaff::class, 'owner_id');
    }

    public function userOtpByID()
    {
        return $this->hasOne(UserOtp::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    public function hasPermission($permission): bool
    {
        return $this->role->permissions()->where('slug', $permission)->first() ? true : false;
    }


    /**
     * Mutations
     */
    public function setPasswordAttribute($password)
    {
        return $password ? Hash::make($password) : null;
    }
}
