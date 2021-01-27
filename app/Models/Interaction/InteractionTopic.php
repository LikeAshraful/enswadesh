<?php

namespace App\Models\Interaction;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InteractionTopic extends Model
{
    use HasFactory;

    protected $fillable = ['title','description', 'slug', 'thumbnail', 'status'];
}
