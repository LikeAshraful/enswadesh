<?php

namespace App\Http\Controllers\API\Order;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Order\Order;
use Illuminate\Http\Request;
use App\Models\Order\OrderItem;
use App\Models\Product\Product;
use Illuminate\Support\Facades\DB;
use App\Models\Product\ProductSize;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Product\ProductWeight;
use Repository\Order\OrderRepository;
use App\Http\Controllers\JsonResponseTrait;
use App\Http\Resources\Order\OrderResource;
use App\Notifications\Order\OrderPlaced;
use App\Notifications\Order\StatusUpdate;
use Illuminate\Support\Facades\Notification;

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

    public function ordersByShop($shop_id)
    {
        $orders = $this->orderRepo->getAllByShopID($shop_id);
        return $this->json(
            "Order List",
            OrderResource::collection($orders)
        );
    }

    public function salesReport($shop_id)
    {   $sales_report = [];
        $todays_order = Order::where('shop_id', $shop_id)->where('customer_id', Auth::id())->whereDate('created_at', Carbon::today());
        $sales_report['todays_sales'] = $todays_order->get()->sum('total_price');
        $sales_report['todays_orders'] = $todays_order->get()->count();
        $sales_report['todays_delivery'] = $todays_order->where('order_status', 3)->get()->count();

        return $this->json(
            "Sales Report",
            $sales_report
        );
    }

    public function store(Request $request)
    {
        // return $request;

        $order = DB::transaction(function() use ($request) {
            $order_no = GenerateOrderNumber();
            $order = $this->orderRepo->create($request->except('order_no') + [
                'order_no' => $order_no
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
                    $orderItemData->size = $product['size'] ?? NULL;
                    $orderItemData->weight = $product['weight'] ?? NULL;
                    $orderItemData->save();

                    if ($product['product_type'] == 'simple' )
                    {
                        $productData = Product::find($orderItemData->product_id);
                        $productData->stocks = $product['stocks'] - $product['count'];
                        $productData->update();
                    }

                    if($product['product_type'] == 'size_base')
                    {
                        $productSize = ProductSize::where('product_id', $orderItemData->product_id)->where('size', $orderItemData->size)->first();
                        $productSize->stocks = $product['stocks'] - $product['count'];
                        $productSize->update();
                    }

                    if($product['product_type'] == 'weight_base')
                    {
                        $productWeight = ProductWeight::where('product_id', $orderItemData->product_id)->where('weight', $orderItemData->weight)->first();
                        $productWeight->stocks = $product['stocks'] - $product['count'];
                        $productWeight->update();
                    }
                }
                $userSchema = User::find($request->customer_id);
                $orderData = [
                    'title' => 'Your Order ' . $order_no . ' Has been Placed',
                    'body' => 'Once your order items is shipped, we will send an email with a link to track your order. Your order summary is given below. Thank you again for being with us.',
                    'thanks' => 'Thank you',
                    'action_button' => 'View Order',
                    'action_url' => '/my-account/myorders',
                    'shop_id' => $request->shop_id,
                    'name' => $request->shipping_name,
                ];

                //sent notification & Mail while Order Placed
                Notification::send($userSchema, new OrderPlaced($orderData));
                // if($request->shipping_email != null || $request->shipping_email != $userSchema->email)
                //         Notification::route('mail', $request->shipping_email)->notify(new OrderPlaced($orderData));
            }

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


    public function statusUpdate($status, $id)
    {
        $order = $this->orderRepo->findOrFailByID($id);
        $order->order_status = $status;
        $order->update();

        $userSchema = User::find($order->customer_id);
        $orderData = [
            'title' => 'Your Order ' . $order->order_no . ' status updated to ' . $order->orderStatus(),
            'body' => 'For further details stay with us',
            'action_button' => 'View Order',
            'action_url' => '/my-account/myorders',
            'name' => $order->shipping_name,
        ];

        // sent notification & Mail while Order Placed
        Notification::send($userSchema, new StatusUpdate($orderData));
        // if($order->shipping_email != null || $order->shipping_email != $userSchema->email)
        //     Notification::route('mail', $order->shipping_email)->notify(new StatusUpdate($orderData));

        return $this->json(
            "Order Status Updated Sucessfully",
            new OrderResource($order)
        );
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

    public function selfOrderBystatus($status)
    {
        $selfOrdersStatus = $this->orderRepo->selfOrderBystatus($status, Auth::id());
        return $this->json(
            "My Order List By Status",
            OrderResource::collection($selfOrdersStatus)
        );
    }

    public function lastOrder()
    {
        $lastOrder = $this->orderRepo->getLastOrder(Auth::id());
        return $this->json(
            "Thank you for your Order",
            new OrderResource($lastOrder)
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
