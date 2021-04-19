<?php

namespace App\Models\Interaction;

use Illuminate\Database\Eloquent\Model;
use App\Models\Interaction\InteractionCategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InteractionTopic extends Model
{
    use HasFactory;

    protected $fillable = ['title','description', 'slug', 'thumbnail', 'interaction_category_id','status'];

    public function interaction_category()
    {
        return $this->belongsTo(InteractionCategory::class);
    }
}
