<?php

namespace App\Http\Resources\General\Interaction;

use Illuminate\Http\Resources\Json\JsonResource;

class InteractionResource extends JsonResource
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
            'title' => $this->title,
            'description' => $this->description,
            'slug' => $this->slug,
            'status' => $this->status,
            'user' => $this->user,
            'category'=> $this->category,
            'topic' => $this->topic,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
