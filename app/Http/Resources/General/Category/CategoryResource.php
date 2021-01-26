<?php

namespace App\Http\Resources\General\Category;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
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
            'id'           => $this->id,
            'name'         => $this->name,
            'subcategory'       => $this->subcategory,
            'description'  => $this->description,
            'slug'         => $this->slug,
            'icon'         => $this->icon,
            'status'       => $this->status,
            'shop_id'      => $this->shop_id,
            'level'        => $this->level,
            'created_by'   => $this->created_by,
            'updated_by'   => $this->updated_by,
            'deleted_by'   => $this->deleted_by,
            'created_at'   => $this->created_at,
            'updated_at'   => $this->updated_at,
        ];
    }
}
