<?php

namespace App\Http\Controllers\API\Location;

use Illuminate\Http\Request;
use App\Models\Location\Market;
use Illuminate\Routing\Controller;
use Repository\Location\MarketRepository;
use App\Http\Controllers\JsonResponseTrait;
use Illuminate\Contracts\Support\Renderable;
use App\Http\Resources\Location\MarketResource;

class MarketController extends Controller
{
    use JsonResponseTrait;

    public $marketRepo;

    public function __construct(MarketRepository $marketRepository)
    {
        $this->marketRepo = $marketRepository;
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $allMarkets = $this->marketRepo->getAll();
        return $this->json(
            'Market list',
            MarketResource::collection($allMarkets)
        );
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function allMarketsByCity($id)
    {
        $topMarkets = $this->marketRepo->getAllMarketsByCity($id);
        return $this->json(
            'All Market list by City',
            MarketResource::collection($topMarkets)
        );
    }

    public function topMarketsByCity($id)
    {
        $topMarkets = $this->marketRepo->getTopMarketsByCity($id);
        return $this->json(
            'Top Market list by City',
            MarketResource::collection($topMarkets)
        );
    }

    public function allMarketsByArea($id)
    {
        $topMarkets = $this->marketRepo->getAllMarketsByArea($id);
        return $this->json(
            'All Market list by Area',
            MarketResource::collection($topMarkets)
        );
    }

    public function topMarketsByArea($id)
    {
        $topMarkets = $this->marketRepo->getTopMarketsByArea($id);
        return $this->json(
            'Top Market list by Area',
            MarketResource::collection($topMarkets)
        );
    }

    /**
     * Single market the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function singleMarket($id)
    {
        $market = $this->marketRepo->findById($id);
        return $this->json(
            'Single Market',
            new MarketResource($market)
        );
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('shopproperty::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
