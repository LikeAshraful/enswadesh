<?php

namespace App\Http\Resources\Product\Base;

use Illuminate\Http\Resources\Json\JsonResource;

class UnitResource extends JsonResource
{
    public function toArray($request)
    {
        return [
        	'id'			=> $this->id,
            'name'          => $this->name,
            'created_at'    => $this->created_at->diffForHumans()
        ];
    }
}