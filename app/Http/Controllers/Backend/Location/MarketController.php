<?php

namespace App\Http\Controllers\Backend\Location;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Repository\Location\AreaRepository;
use Repository\Location\CityRepository;
use Repository\Location\MarketRepository;

class MarketController extends Controller
{
    public $areaRepo;
    public $marketRepo;

    public function __construct(CityRepository $cityRepository, AreaRepository $areaRepository, MarketRepository $marketRepository)
    {
        $this->cityRepo = $cityRepository;
        $this->areaRepo = $areaRepository;
        $this->marketRepo = $marketRepository;
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $markets = $this->marketRepo->getAll();
        return view('backend.location.market.index',  compact('markets'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $cities = $this->cityRepo->getAll();
        $areas = $this->areaRepo->getAll();
        return view('backend.location.market.form', compact('cities', 'areas'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $request->validate([
            'market_name' => 'required',
            'market_address' => 'required',
            'market_description' => 'required',
            'market_icon' => 'required|mimes:jpeg,jpg,png|max:500',
        ]);

        $market_icon = $request->hasFile('market_icon') ? $this->marketRepo->storeFile($request->file('market_icon')) : null;
        $this->marketRepo->create($request->except('market_icon') +
            [
                'market_icon' => $market_icon
            ]);

        notify()->success('Market Successfully Added.', 'Added');
        return redirect()->route('backend.markets.index');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $cities = $this->cityRepo->getAll();
        $areas = $this->areaRepo->getAll();
        $market = $this->marketRepo->findByID($id);
        return view('backend.location.market.form', compact('market', 'cities', 'areas'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        $market = $this->marketRepo->findByID($id);

        $marketIcon = $request->hasFile('market_icon');

        $market_icon = $marketIcon ? $this->marketRepo->storeFile($request->file('market_icon')) : $market->market_icon;

        if ($marketIcon) {
            $this->marketRepo->updateMarket($id);
        }

        $this->marketRepo->updateByID($id, $request->except('market_icon') +
            [
                'market_icon' => $market_icon
            ]);

        notify()->success('Market Successfully Updated.', 'Updated');
        return redirect()->route('backend.markets.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $this->marketRepo->deleteMarket($id);
        notify()->warning('Market Successfully Deleted.', 'Deleted');
        return redirect()->route('backend.markets.index');
    }
}
