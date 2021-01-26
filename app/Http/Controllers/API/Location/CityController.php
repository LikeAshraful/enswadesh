<?php

namespace App\Http\Controllers\API\Location;

use Illuminate\Http\Request;
use App\Models\Location\City;
use Illuminate\Routing\Controller;
use Repository\Location\CityRepository;
use App\Http\Controllers\JsonResponseTrait;
use Illuminate\Contracts\Support\Renderable;
use App\Http\Resources\Location\CityResource;
use App\Http\Resources\Location\MarketResource;

class CityController extends Controller
{
    use JsonResponseTrait;

    public $cityRepo;

    public function __construct(CityRepository $cityRepository)
    {
        $this->cityRepo = $cityRepository;
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $allCities = $this->cityRepo->getAll();
        return $this->json(
            'City list',
            CityResource::collection($allCities)
        );
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function cityMarkets($id)
    {
        $markets = $this->cityRepo->getTopMarkets($id);

        return $this->json(
            'City by markete list',
            $markets
        );
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('shopproperty::show');
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
