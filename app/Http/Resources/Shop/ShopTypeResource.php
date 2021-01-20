<?php

namespace App\Http\Resources\Shop;

use Illuminate\Http\Resources\Json\JsonResource;

class ShopTypeResource extends JsonResource
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
            'id'                     => $this->id,
            'shop_type_name'         => $this->shop_type_name,
            'shop_type_description'  => $this->shop_type_description,
            'shop_type_slug'         => $this->shop_type_slug
        ];
    }
}
