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
            'id'                        => $this->id,
            'shopOwner'                 => $this->shopOwner,
            'city'                      => $this->city,
            'area'                      => $this->area,
            'market'                    => $this->market,
            'floor'                     => $this->floor,
            'shop_no'                   => $this->shop_no,
            'shop_name'                 => $this->shop_name,
            'shop_phone'                => $this->shop_phone,
            'shop_email'                => $this->shop_email,
            'shop_fax'                  => $this->shop_fax,
            'shop_slug'                 => $this->shop_slug,
            'shop_cover_image'          => $this->shop_cover_image,
            'shop_icon'                 => $this->shop_icon,
            'shopType'                  => $this->shopType,
            'shop_description'          => $this->shop_description,
            'meta_title_shop'           => $this->meta_title_shop,
            'meta_keywords_shop'        => $this->meta_keywords_shop,
            'meta_description_shop'     => $this->meta_description_shop,
            'meta_og_image_shop'        => $this->meta_og_image_shop,
            'meta_og_url_shop'          => $this->meta_og_url_shop,
        ];
    }
}
