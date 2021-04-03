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

    public function shippingAddress($userId)
    {
    	return $this->model()::with('customer', 'orderItems')->where('customer_id', $userId)->first();
    }


}

