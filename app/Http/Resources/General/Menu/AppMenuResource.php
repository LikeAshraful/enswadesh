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
            'menu_name'         => $this->menu_name,
            'menu_description'  => $this->menu_description,
            'menu_slug'         => $this->menu_slug,
            'menu_icon'         => $this->menu_icon,
            'created_at'        => $this->created_at,
            'updated_at'        => $this->updated_at,
        ];
    }
}
