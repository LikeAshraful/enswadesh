<?php

namespace App\Http\Resources\Order;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
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
            'order_no' => $this->order_no,
            'customer' => $this->customer,
            'total_quantity' => $this->total_quantity,
            'total_discount' => $this->total_discount,
            'total_vat' => $this->total_vat,
            'total_price' => $this->total_price,
            'order_status' => $this->order_status,
            'total_quantity' => $this->total_quantity,
            'billing_email' => $this->billing_email,
            'billing_name' => $this->billing_name,
            'billing_address' => $this->billing_address,
            'billing_city' => $this->billing_city,
            'billing_phone' => $this->billing_phone,
            'payment_gateway' => $this->payment_gateway,
            'created_at' => (string) $this->created_at,
            'updated_at' => (string) $this->updated_at,
          ];
    }
}