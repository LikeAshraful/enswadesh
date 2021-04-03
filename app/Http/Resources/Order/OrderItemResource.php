<?php

namespace App\Http\Resources\Order;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderItemResource extends JsonResource
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
            'order' => $this->order,
            'product' => $this->product,
            'size' => $this->size,
            'weight' => $this->weight,
            'quantity' => $this->quantity,
            'discount' => $this->discount,
            'vat' => $this->vat,
            'price' => $this->price,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at

          ];
    }
}
