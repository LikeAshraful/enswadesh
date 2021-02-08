<?php

namespace App\Http\Resources\General\Menu;

use Illuminate\Http\Resources\Json\JsonResource;

class AppMenuResource extends JsonResource
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
            'name'         => $this->name,
            'description'  => $this->description,
            'slug'         => $this->slug,
            'icon'         => $this->icon,
            'created_at'        => $this->created_at,
            'updated_at'        => $this->updated_at,
        ];
    }
}
