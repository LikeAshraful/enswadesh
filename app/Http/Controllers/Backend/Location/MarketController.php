<?php

namespace App\Http\Controllers\Backend\Location;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Repository\Location\AreaRepository;
use Repository\Location\CityRepository;
use Repository\Location\MarketRepository;

class MarketController extends Controller
{
    public $cityRepo;
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
            'name' => 'required',
            'address' => 'required',
            'description' => 'required',
            'icon' => 'required|mimes:jpeg,jpg,png|max:500',
        ]);

        $icon = $request->hasFile('icon') ? $this->marketRepo->storeFile($request->file('icon')) : null;
        $this->marketRepo->create($request->except('icon') +
            [
                'icon' => $icon
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
