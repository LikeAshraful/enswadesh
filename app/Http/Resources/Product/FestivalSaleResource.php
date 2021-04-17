<?php

namespace App\Http\Resources\Product;

use App\Http\Resources\Product\ProductResource;
use Illuminate\Http\Resources\Json\JsonResource;

class FestivalSaleResource extends JsonResource
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
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'start_time' => $this->start_time,
            'end_time'  => $this->end_time,
            'product' => new ProductResource($this->product),
            'created_at' => $this->created_at->diffForHumans()
        ];
    }
}
