<?php

namespace App\Http\Resources\Shop;

use Illuminate\Http\Resources\Json\JsonResource;

class ShopResource extends JsonResource
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
            'id'                   => $this->id,
            'shopOwner'            => $this->shopOwner,
            'city'                 => $this->city,
            'area'                 => $this->area,
            'market'               => $this->market,
            'floor'                => $this->floor,
            'shop_no'              => $this->shop_no,
            'status'               => $this->status,
            'name'                 => $this->name,
            'phone'                => $this->phone,
            'email'                => $this->email,
            'fax'                  => $this->fax,
            'block'                => $this->block,
            'slug'                 => $this->slug,
            'subscription_note'    => $this->subscription_note,
            'cover_image'          => $this->cover_image,
            'logo'                 => $this->logo,
            'shop_gallery'         => $this->shopMedia,
            'shopType'             => $this->shopType,
            'total_subscriber'     => $this->subscribeShops->count(),
            'description'          => $this->description,
            'meta_title'           => $this->meta_title,
            'meta_keywords'        => $this->meta_keywords,
            'meta_description'     => $this->meta_description,
            'meta_og_image'        => $this->meta_og_image,
            'meta_og_url'          => $this->meta_og_url,
        ];
    }
}
