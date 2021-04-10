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

    public function getLastOrder($userId)
    {
        return $this->model()::where('customer_id', $userId)->latest()->first();
    }


    public function getAllByShopID($shop_id, $status = NULL, $limit = NULL)
    {
        $data = $this->model()::where('shop_id', $shop_id)->latest();

        if($status != NULL)
            $data->where('status', $status);

        if($limit != NULL)
            return $data->limit($limit)->get();

        return $data->get();
    }

    public function selfOrderBystatus($status, $user_id, $limit = NULL)
    {
        $data = $this->model()::where('order_status', $status)->where('customer_id', $user_id)->latest();

        if($limit != NULL)
            return $data->limit($limit)->get();

        return $data->get();
    }

}

