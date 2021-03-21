<?php

namespace App\Http\Resources\General\Brand;

use Illuminate\Http\Resources\Json\JsonResource;

class BrandResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'name'          => $this->name,
            'description'   => $this->description,
            'slug '         => $this->slug ,
            'user_id'       => $this->createdBy? $this->createdBy->name: '',
            'shop_id'       => $this->shopByID? $this->shopByID->name: '',
            'created_at'    => $this->created_at->diffForHumans()
        ];
    }
}