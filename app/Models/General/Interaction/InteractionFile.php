<?php

namespace App\Models\General\Interaction;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InteractionFile extends Model
{
    use HasFactory;

    protected $fillable = ['file_type','file_path', 'interaction_id'];


}
