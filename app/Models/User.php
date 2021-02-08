<?php

namespace App\Models;

use App\Models\Role;
use App\Models\Profile;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\VendorStaff;
use Illuminate\Contracts\Auth\MustVerifyEmail;


class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;
    use HasApiTokens;
    use HasFactory;

    protected $fillable = [
        'role_id',
        'name',
        'phone_number',
        'email',
        'otp',
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
}
