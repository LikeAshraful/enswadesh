<?php

namespace App\Http\Controllers\API\Order;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Repository\Order\OrderRepository;
use App\Http\Controllers\JsonResponseTrait;
use App\Http\Resources\Order\OrderResource;
use App\Models\Order\OrderItem;

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

    public function store(Request $request)
    {
        $order = DB::transaction(function() use ($request) {
            return $request->products;
            $order = $this->orderRepo->create($request->except('order_no') + [
                'order_no' => GenerateOrderNumber()
            ]);

            if ($request->has('products') && sizeof($request->products) > 0) {

                foreach ($request->products as $product)
                {
                    if (!$product) continue;
                    $orderItemData = new OrderItem;
                    $orderItemData->order_id = $order->id;
                    $orderItemData->product_id = $product['id'];
                    $orderItemData->quantity = $product['count'];
                    $orderItemData->price = $product['count'] * $product['price'];
                    // $orderItemData->size = $product['size'];
                    // $orderItemData->weight = $product['weight'];
                    $orderItemData->save();
                }
            }

            return $order;
        });

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

    public function shippingAddress()
    {
        $address = $this->orderRepo->shippingAddress(Auth::id());
        return $this->json(
            "Order Addrss",
            $address
        );
    }
}
