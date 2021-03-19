<?php

use App\Models\Order\Order;

if (!function_exists('GenerateOrderNumber')) {

    /**
     * description
     *
     * @param
     * @return
     */
    function GenerateOrderNumber()
    {
        $orderCount = Order::count();
        $prefix = 'ENS';
        if($orderCount<1){
            $orderNo = $prefix."1000000000";
        }
        else{
            $orderNo = Order::orderBy('id', 'desc')->first()->order_no;
            $num= (int)preg_replace('/[^0-9]/', '', $orderNo);
            $orderNo=$prefix.($num+1);
        }

        return $orderNo;
    }


}