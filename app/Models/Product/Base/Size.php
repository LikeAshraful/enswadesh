<?php

namespace App\Models\Product\Base;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Size extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'type', 'user_id', 'status'];

    public function createdBy(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}