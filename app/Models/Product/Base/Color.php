<?php

namespace App\Models\Product\Base;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Color extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'type', 'color_code', 'user_id', 'status'];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
