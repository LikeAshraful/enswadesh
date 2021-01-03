<?php

namespace Modules\ShopProperty\Transformers\Api\Shop;

use Illuminate\Http\Resources\Json\JsonResource;

class ShopResouce extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
