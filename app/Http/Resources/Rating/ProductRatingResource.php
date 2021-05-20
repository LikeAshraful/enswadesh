<?php

namespace App\Http\Resources\Rating;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductRatingResource extends JsonResource
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
            'rate' => $this->rate,
            'sum' => $this->sumRate(),
            'count' => $this->countRate(),
            'review' => $this->review,
            'user' => $this->user,
            'created_at' => $this->created_at->diffForHumans()
        ];
    }
}
