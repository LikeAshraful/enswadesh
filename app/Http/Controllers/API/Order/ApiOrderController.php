<?php

namespace App\Http\Controllers\API\Order;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Repository\Order\OrderRepository;
use App\Http\Controllers\JsonResponseTrait;
use App\Http\Resources\Order\OrderResource;

class ApiOrderController extends Controller
{
    use JsonResponseTrait;

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
    public function index()
    {
        $allOrder = $this->orderRepo->getAll();
        return $this->json(
            "Order List",
            OrderResource::collection($allOrder)
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = $this->orderRepo->findOrFailByID($id);
        return $this->json(
            "Order",
            new OrderResource($order)
        );
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
        //
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

    public function selfOrder($id) {
        $selfOrders = $this->orderRepo->getAllByCustomerID($id);
        return $this->json(
            "My Order List",
            OrderResource::collection($selfOrders)
        );

    }
}
