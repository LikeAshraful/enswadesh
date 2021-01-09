<?php

namespace App\Http\Resources\Location;

use Illuminate\Http\Resources\Json\JsonResource;

class ThanaResource extends JsonResource
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
            'thana_name'         => $this->thana_name,
            'thana_description'  => $this->thana_description,
            'thana_slug'         => $this->thana_slug,
            'thana_icon'         => $this->thana_icon,
            'area'              => $this->areaOfThana,
            'created_at'        => $this->created_at,
            'updated_at'        => $this->updated_at,
        ];
    }
}
