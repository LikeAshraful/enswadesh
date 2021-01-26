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
            'market_name'           => $this->market_name,
            'market_description'    => $this->market_description,
            'market_slug'           => $this->market_slug,
            'market_icon'           => $this->market_icon,
            'area'                  => $this->areas,
            'shop_count'            => $this->shops_count,
            'created_at'            => $this->created_at,
            'updated_at'            => $this->updated_at,
        ];
    }
}
