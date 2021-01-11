<?php

namespace App\Http\Controllers\API\Shop;

use Illuminate\Http\Request;
use App\Models\Shop\ShopType;
use App\Http\Controllers\Controller;
use Repository\Shop\ShopTypeRepository;
use App\Http\Controllers\JsonResponseTrait;
use App\Http\Resources\Shop\ShopTypeResource;

class ApiShopTypeController extends Controller
{

    use JsonResponseTrait;

    public $shopTypeRepo;

    public function __construct(ShopTypeRepository $shopTypeRepository)
    {
        $this->shopTypeRepo = $shopTypeRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shopType = $this->shopTypeRepo->getAll();
        return $this->json(
            'Shop list',
            ShopTypeResource::collection($shopType)
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
        //
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
}