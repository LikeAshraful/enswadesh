<?php

namespace Repository\Order;

use App\Models\Order\Order;
use Repository\BaseRepository;
use App\Models\Order\OrderItem;

class OrderItemRepository extends BaseRepository
{
    function model()
    {
        return OrderItem::class;
    }

    public static function storeOrderItems(Order $order, array $products)
    {
        if (sizeof($products) == 0) return ;

        foreach ($products as $product)
        {
            if (!$product) continue;
            $orderItemData = new OrderItem;
            $orderItemData->order_id = $order->id;
            $orderItemData->product_id = $product['id'];
            $orderItemData->quantity = $product['count'];
            $orderItemData->price = $product['count'] * $product['price'];
            $orderItemData->size = $product['size'] ?? NULL;
            $orderItemData->weight = $product['weight'] ?? NULL;
            $orderItemData->save();
        }

        return $order;
    }
}
