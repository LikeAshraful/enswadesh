<?php

namespace App\Http\Resources\Product\Base;

use Illuminate\Http\Resources\Json\JsonResource;

class SizeResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'name'          => $this->name,
            'type'          => $this->type,
            'status'        => $this->status,
            'user_id'       => $this->createdBy->name,
            'created_at'    => $this->created_at->diffForHumans()
        ];
    }
}