<?php

namespace App\Http\Resources\Interaction;

use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'comment' => $this->comment,
            'count' => $this->count(),
            'user' => $this->user,
            'interaction'=> $this->interaction,
            'file_type' => $this->file_type,
            'file' => $this->file,
            'created_at' => $this->created_at->diffForHumans(),
            'updated_at' => $this->updated_at,
        ];
    }
}
