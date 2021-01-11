<?php

namespace Repository\Order;

use App\Models\Order\Order;
use Repository\BaseRepository;

class OrderRepository extends BaseRepository
{
    function model()
    {
        return Order::class;
    }
}
