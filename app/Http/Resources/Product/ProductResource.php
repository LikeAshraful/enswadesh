<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            'ref' => $this->ref,
            'name' => $this->name,
            'slug' => $this->slug,
            'price' => $this->price,
            'shop' => $this->shop,
            'user' => $this->user,
            'brand' => $this->brand,
            'category' => $this->productCategory->category,
            'thumbnail' => $this->thumbnail,
            'image' => $this->productImage,
            'can_bargain' => $this->can_bargain,
            'product_type' => $this->product_type,
            'refund_policy' => $this->refund_policy,
            'service_policy' => $this->service_policy,
            'description' => $this->description,
            'thumbnail' => $this->thumbnail,
            'offers' => $this->offers,
            'tag' => $this->tag,
            'total_stocks' => $this->total_stocks,
            'created_at' => $this->created_at->diffForHumans()
        ];
    }
}
