<?php

namespace App\Models\Interaction;

use App\Models\User;
use App\Models\Interaction\Interaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Like extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','interaction_id'];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function interaction()
    {
        return $this->belongsTo(Interaction::class, 'interaction_id', 'id');
    }

    public function count()
    {
        return Like::where('interaction_id', $this->id)->count();
    }
}
