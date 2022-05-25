<?php

namespace App\Models\Rating;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductRating extends Model
{
    use HasFactory;

    protected $fillable = ['rate','user_id','shop_id','product_id', 'review'];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function sumRate()
    {
    	return ProductRating::where('product_id', $this->product_id)->sum('rate');
    }

    public function countRate()
    {
    	return ProductRating::where('product_id', $this->product_id)->count();
    }

}
