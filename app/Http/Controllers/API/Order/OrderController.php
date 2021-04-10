<?php

namespace App\Http\Controllers\API\Order;

use Carbon\Carbon;
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

        $order = DB::transaction(function() use ($request) {

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

        return $this->json(
            "Order Updated Sucessfully",
            $order
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
