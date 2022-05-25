<?php

namespace App\Http\Controllers\API\Product;

use App\Http\Controllers\Controller;
use App\Http\Controllers\JsonResponseTrait;
use Repository\Product\FlashSaleRepository;
use App\Http\Requests\Product\StoreFlashSaleRequest;
use App\Http\Resources\Product\FlashSaleResource;

class FlashsaleController extends Controller
{
    use JsonResponseTrait;

    protected $flashSaleRepo;

    public function __construct(FlashSaleRepository $flashSaleRepository)
    {
        $this->flashSaleRepo = $flashSaleRepository;
    }

    public function index() {
       $products = $this->flashSaleRepo->getAllProducts();

       return $this->json(
            'Flash Sale Product',
            FlashSaleResource::collection($products)
        );
    }

    public function addToFlashSale(StoreFlashSaleRequest $request){

        $flash_sale = $this->flashSaleRepo->create($request->all());

        return $this->json(
            'Added to Flash Sale',
            $flash_sale
        );
    }


}
