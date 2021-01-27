<?php

namespace App\Http\Resources\Location;

use Illuminate\Http\Resources\Json\JsonResource;

class AreaResource extends JsonResource
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
            'id'                => $this->id,
            'area_name'         => $this->area_name,
            'area_description'  => $this->area_description,
            'area_slug'         => $this->area_slug,
            'area_icon'         => $this->area_icon,
            'city'              => $this->cities,
            'created_at'        => $this->created_at,
            'updated_at'        => $this->updated_at,
        ];
    }
}
