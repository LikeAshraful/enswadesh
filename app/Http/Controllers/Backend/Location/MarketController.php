<?php

namespace App\Http\Controllers\Backend\Location;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Repository\Location\AreaRepository;
use Repository\Location\CityRepository;
use Repository\Location\MarketRepository;
use App\Http\Requests\Location\Market\StoreMarketRequest;
use App\Http\Requests\Location\Market\UpdateMarketRequest;

class MarketController extends Controller
{
    public $cityRepo;
    public $areaRepo;
    public $marketRepo;

    public function __construct(CityRepository $cityRepository, AreaRepository $areaRepository, MarketRepository $marketRepository)
    {
        $this->cityRepo     = $cityRepository;
        $this->areaRepo     = $areaRepository;
        $this->marketRepo   = $marketRepository;
    }

    public function index()
    {
        Gate::authorize('backend.markets.index');
        $markets = $this->marketRepo->getAll();
        return view('backend.location.market.index',  compact('markets'));
    }

    public function create()
    {
        Gate::authorize('backend.markets.create');
        $cities = $this->cityRepo->getAll();
        $areas  = $this->areaRepo->getAll();
        return view('backend.location.market.form', compact('cities', 'areas'));
    }

    public function store(StoreMarketRequest $request)
    {
        $icon = $request->hasFile('icon') ? $this->marketRepo->storeFile($request->file('icon')) : null;
        $this->marketRepo->create($request->except('icon') +
            [
                'icon' => $icon
            ]);
        notify()->success('Market Successfully Added.', 'Added');
        return redirect()->route('backend.markets.index');
    }

    public function show($id)
    {
        return view('show');
    }

    public function edit($id)
    {
        Gate::authorize('backend.markets.edit');
        $cities = $this->cityRepo->getAll();
        $areas = $this->areaRepo->getAll();
        $market = $this->marketRepo->findByID($id);
        return view('backend.location.market.form', compact('market', 'cities', 'areas'));
    }

    public function update(UpdateMarketRequest $request, $id)
    {
        $market = $this->marketRepo->findByID($id);
        $marketIcon = $request->hasFile('icon');
        $icon = $marketIcon ? $this->marketRepo->storeFile($request->file('icon')) : $market->icon;
        if ($marketIcon) {
            $this->marketRepo->updateMarket($id);
        }
        $this->marketRepo->updateByID($id, $request->except('icon') +
            [
                'icon' => $icon
            ]);
        notify()->success('Market Successfully Updated.', 'Updated');
        return redirect()->route('backend.markets.index');
    }

    public function destroy($id)
    {
        Gate::authorize('backend.markets.destroy');
        $this->marketRepo->deleteMarket($id);
        notify()->warning('Market Successfully Deleted.', 'Deleted');
        return redirect()->route('backend.markets.index');
    }
}