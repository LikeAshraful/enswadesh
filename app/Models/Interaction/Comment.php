<?php

namespace App\Models\Interaction;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\Interaction\Interaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['comment','file', 'file_type', 'status', 'interaction_id', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function interaction()
    {
        return $this->belongsTo(Interaction::class, 'interaction_id', 'id');
    }

    public function countComent()
    {
        return Comment::where('interaction_id', $this->id)->count();
      // return DB::select("SELECT interaction_id, count(*) as count FROM comments  WHERE interaction_id = '$this->id' GROUP BY interaction_id");
    }

}
