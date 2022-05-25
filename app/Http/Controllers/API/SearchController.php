<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Repository\Shop\ShopRepository;
use App\Http\Controllers\Controller;
use App\Http\Resources\Shop\ShopResource;
use Repository\Location\MarketRepository;
use Repository\Product\ProductRepository;
use App\Http\Controllers\JsonResponseTrait;
use App\Http\Resources\Location\MarketResource;
use App\Http\Resources\Product\ProductResource;

class SearchController extends Controller
{
    use JsonResponseTrait;

    public $marketRepo;
    public $shopRepo;
    public $productRepo;

    public function __construct(MarketRepository $marketRepository, ShopRepository $shopRepository, ProductRepository $productRepository)
    {
        $this->marketRepo = $marketRepository;
        $this->shopRepo = $shopRepository;
        $this->productRepo = $productRepository;
    }

    public function searchAllHeder($type, $key)
    {
        if ($type == 1) {
            $markets = $this->marketRepo->mainSearchMarkets($key);
            return $this->json(
                'Search Markets list',
                MarketResource::collection($markets)->response()->getData(true)
            );
        } elseif ($type == 2) {
            $shops = $this->shopRepo->mainSearchShops($key);
            return $this->json(
                'Search Shop list',
                ShopResource::collection($shops)->response()->getData(true)
            );
        } elseif ($type == 3) {
            $products = $this->productRepo->mainSearchProducts($key);
            return $this->json('Products By Search List', ProductResource::collection($products)->response()->getData(true));
        } else {
            $markets = $this->marketRepo->mainSearchMarkets($key);
            $markets = MarketResource::collection($markets)->response()->getData(true);
            $shops = $this->shopRepo->mainSearchShops($key);
            $shops = ShopResource::collection($shops)->response()->getData(true);
            $products = $this->productRepo->mainSearchProducts($key);
            $products = ProductResource::collection($products)->response()->getData(true);
            $alls = array();
            array_push($alls, $markets, $shops, $products);
            return response()->json(
                $alls
            );
        }
    }

    public function searchAllHeder1(Request $request)
    {
        if ($request->params['selectType'] == 1) {
            $markets = $this->marketRepo->mainSearchMarkets($request->params['keyword']);
            return $this->json(
                'Search Markets list',
                MarketResource::collection($markets)->response()->getData(true)
            );
        } elseif ($request->params['selectType'] == 2) {
            $shops = $this->shopRepo->mainSearchShops($request->params['keyword']);
            return $this->json(
                'Search Shop list',
                ShopResource::collection($shops)->response()->getData(true)
            );
        } elseif ($request->params['selectType'] == 3) {
            $products = $this->productRepo->mainSearchProducts($request->params['keyword']);
            return $this->json('Products By Search List', ProductResource::collection($products)->response()->getData(true));
        } else {
            $markets = $this->marketRepo->mainSearchMarkets($request->params['keyword']);
            $markets = MarketResource::collection($markets)->response()->getData(true);
            $shops = $this->shopRepo->mainSearchShops($request->params['keyword']);
            $shops = ShopResource::collection($shops)->response()->getData(true);
            $products = $this->productRepo->mainSearchProducts($request->params['keyword']);
            $products = ProductResource::collection($products)->response()->getData(true);
            $alls = array();
            array_push($alls, $markets, $shops, $products);
            return response()->json(
                $alls
            );
        }
    }
}
