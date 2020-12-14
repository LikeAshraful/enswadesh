<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Permission extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    public function module()
    {
        return $this->belongsTo(Module::class);
    }
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
