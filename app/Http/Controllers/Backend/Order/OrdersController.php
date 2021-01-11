<?php

namespace App\Http\Controllers\Backend\Order;

use App\Models\Order\Order;
use Illuminate\Http\Request;

use App\Models\Order\OrderItem;
use App\Http\Controllers\Controller;
use Repository\Order\OrderRepository;

class OrdersController extends Controller
{
    public $orderRepo;

    public function __construct(OrderRepository $orderRepository)
    {
        $this->orderRepo = $orderRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $order_status = $request->get('order_status');
        if(($order_status == 0 || $order_status == 5) && $order_status != null){
            if($order_status == 0){
                $orders = Order::where('order_status', $order_status)->get();
                $page_title = 'Cancel Order List';
            }
            if($order_status == 5){
                $orders = Order::where('order_status', $order_status)->get();
                $page_title = 'Refund Order List';
            }
        }
        else{
            $orders = Order::whereNotIn('order_status', [0,5])->get();
            $page_title = 'Order List';
        }

        return view('backend.order.index', compact('orders', 'page_title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::find($id);
        $items = OrderItem::where('order_id', $id)->get();
        return view('backend.order.invoice')->with(compact('order', 'items'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $order = Order::find($id);
        $order->order_status = $request->order_status;
        $order->update();
        notify()->success('Order Status Successfully Updated.', 'Updated');
        // return redirect()->route('backend.orders.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
