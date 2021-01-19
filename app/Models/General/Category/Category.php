<?php

namespace App\Models\General\Category;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
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

    public function subcategory(){
        return $this->hasMany(Category::class, 'parent_id','id');
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::of($value)->slug('_');
    }

}
