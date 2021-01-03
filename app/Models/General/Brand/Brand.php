<?php

namespace Modules\ProductProperty\Entities;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Brand extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at'];
    
    public static function boot()
    {

        parent::boot();

        static::creating(function ($model) {
            $model->created_by = Auth::id();
        });
        static::updating(function ($model) {
            $model->updated_by = Auth::id();
        });
        static::deleting(function ($model) {
            $model->deleted_by = Auth::id();
            $model->save();
        });

    }
    public function createdBy(){
        return $this->belongsTo(User::class,'created_by','id');
    }
    
    protected static function newFactory()
    {
        return \Modules\ProductProperty\Database\factories\BrandFactory::new();
    }
}
