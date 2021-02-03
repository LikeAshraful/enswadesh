<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermissionStaff extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'owner_id',
        'permission_id',
        'role_id',
    ];
}