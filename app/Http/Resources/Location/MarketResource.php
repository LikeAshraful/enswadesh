<?php

namespace App\Http\Resources\Location;

use Illuminate\Http\Resources\Json\JsonResource;

class MarketResource extends JsonResource
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
            'id'                    => $this->id,
            'city'                  => $this->city,
            'area'                  => $this->areas,
            'name'           => $this->name,
            'description'    => $this->description,
            'slug'           => $this->slug,
            'icon'           => $this->icon,
            'shop_count'            => $this->shops_count,
            'shop_count_floor'      => $this->shops_floor,
            'total_floor'           => $this->total_floor,
            'created_at'            => $this->created_at,
            'updated_at'            => $this->updated_at,
        ];
    }
}
