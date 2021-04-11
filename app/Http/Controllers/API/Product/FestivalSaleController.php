<?php

namespace App\Http\Controllers\API\Product;

use App\Http\Controllers\Controller;
use App\Http\Controllers\JsonResponseTrait;
use Repository\Product\FestivalSaleRepository;
use App\Http\Resources\Product\FestivalSaleResource;
use App\Http\Requests\Product\StoreFestivalSaleRequest;

class FestivalSaleController extends Controller
{
    use JsonResponseTrait;

    public $festivalSaleRepo;

    public function __construct(FestivalSaleRepository $festivalSaleRepository)
    {
        $this->festivalSaleRepo = $festivalSaleRepository;
    }

    public function index() {
        $products = $this->festivalSaleRepo->getAllProducts();

        return $this->json(
            'Festival Sale Product List',
            FestivalSaleResource::collection($products)
        );
     }

    public function addToFestivalSale(StoreFestivalSaleRequest $request) {
        $festival_sale = $this->festivalSaleRepo->create($request->all());

        return $this->json(
            'Added to Festival Sale',
            $festival_sale
        );
    }
}
