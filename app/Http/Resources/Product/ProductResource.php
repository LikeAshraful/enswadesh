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
            'sku'  => $this->sku,
            'price' => $this->price,
            'discount_price' => $this->discountPrice(),
            'currency_type' => $this->currency_type,
            'shop' => $this->shop,
            'user' => $this->user,
            'brand' => $this->brand,
            'category' => $this->productCategory->category,
            'image' => $this->productImage,
            'thumbnail' => $this->thumbnail,
            'audio' => $this->productAudio,
            'video_url' => $this->video_url,
            'can_bargain' => $this->can_bargain,
            'product_type' => $this->product_type,
            'warranty' => $this->warranty,
            'guarantee' => $this->guarantee,
            'lowsizeprice' => $this->lowSizePrice,
            'highsizeprice' => $this->highSizePrice,
            'lowweightprice' => $this->lowWeightPrice,
            'highweightprice' => $this->highWeightPrice,
            'sizes' => $this->productSizes,
            'weights' => $this->productWeights,
            'return_policy' => $this->return_policy,
            'discount' => $this->discount,
            'discount_type' => $this->discount_type,
            'description' => $this->description,
            'offers' => $this->offers,
            'tag' => $this->tag,
            'stocks' => $this->stocks,
            'delivery_offer' => $this->delivery_offer,
            'total_stocks' => $this->totalStocks(),
            'features' => $this->features,
            'created_at' => $this->created_at->diffForHumans()
        ];
    }
}
