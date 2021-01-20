<?php

namespace App\Models\General\Interaction;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Interaction extends Model
{
    use HasFactory;

    protected $fillable = ['title','description', 'slug', 'thumbnail', 'status', 'user_id', 'topic_id', 'interaction_category_id'];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function category()
    {
        return $this->belongsTo(InteractionCategory::class, 'interaction_category_id', 'id');
    }

    public function topic()
    {
        return $this->belongsTo(InteractionTopic::class, 'topic_id', 'id');
    }

    public function file()
    {
        return $this->hasOne(InteractionFile::class);
    }

    //generate slug
    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::of($value)->slug('-');
    }

}
