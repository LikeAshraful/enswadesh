<?php

namespace App\Models\Interaction;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InteractionLog extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','interaction_id', 'log', 'type'];
}
