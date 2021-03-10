<?php

namespace App\Http\Controllers\API\Order;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Repository\Order\OrderRepository;
use App\Http\Controllers\JsonResponseTrait;
use App\Http\Resources\Order\OrderResource;

class OrderController extends Controller
{
    use JsonResponseTrait;

    public $orderRepo;

    public function __construct(OrderRepository $orderRepository)
    {
        $this->orderRepo = $orderRepository;
    }


    public function index()
    {
        $allOrder = $this->orderRepo->getAll();
        return $this->json(
            "Order List",
            OrderResource::collection($allOrder)
        );
    }


    public function shippingAddress()
    {
        $address = $this->orderRepo->shippingAddress(Auth::id());
        return $this->json(
            "Order Addrss",
            $address
        );
    }

    public function store(Request $request)
    {
        $order = $this->orderRepo->create($request->except('order_no') + [
            'order_no' => GenerateOrderNumber()
        ]);

        return $this->json(
            "Order Created Sucessfully",
            $order
        );
    }

    public function show($id)
    {
        $order = $this->orderRepo->findOrFailByID($id);
        return $this->json(
            "Order",
            new OrderResource($order)
        );
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }

    public function selfOrder()
    {
        $selfOrders = $this->orderRepo->getAllByUserID('customer_id', Auth::id());
        return $this->json(
            "My Order List",
            OrderResource::collection($selfOrders)
        );
    }
}
