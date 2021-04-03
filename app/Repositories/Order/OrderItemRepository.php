<?php

namespace Repository\Order;

use App\Models\Order\OrderItem;
use Repository\BaseRepository;

class OrderItemRepository extends BaseRepository
{
    function model()
    {
        return OrderItem::class;
    }
}
