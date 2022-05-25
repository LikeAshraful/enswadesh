<?php

namespace App\Http\Controllers\Backend\Location;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Repository\Location\AreaRepository;
use Repository\Location\CityRepository;
use App\Http\Requests\Location\Area\StoreAreaRequest;
use App\Http\Requests\Location\Area\UpdateAreaRequest;

class AreaController extends Controller
{
    public $areaRepo;
    public $cityRepo;

    public function __construct(AreaRepository $areaRepository, CityRepository $cityRepository)
    {
        $this->areaRepo = $areaRepository;
        $this->cityRepo = $cityRepository;
    }

    public function index()
    {
        Gate::authorize('backend.areas.index');
        $areas = $this->areaRepo->getAll();
        return view('backend.location.area.index',  compact('areas'));
    }

    public function create()
    {
        Gate::authorize('backend.areas.create');
        $cities = $this->cityRepo->getAll();
        return view('backend.location.area.form', compact('cities'));
    }

    public function store(StoreAreaRequest $request)
    {
        $icon = $request->hasFile('icon') ? $this->areaRepo->storeFile($request->file('icon')) : null;
        $this->areaRepo->create($request->except('icon') +
            [
                'icon' => $icon
            ]);
        notify()->success('Area Successfully Added.', 'Added');
        return redirect()->route('backend.areas.index');
    }

    public function show($id)
    {
        return view('show');
    }

    public function edit($id)
    {
        Gate::authorize('backend.areas.edit');
        $cities = $this->cityRepo->getAll();
        $area = $this->areaRepo->findByID($id);
        return view('backend.location.area.form', compact('area', 'cities'));
    }

    public function update(UpdateAreaRequest $request, $id)
    {
        $area = $this->areaRepo->findByID($id);
        $areaIcon = $request->hasFile('icon');
        $icon = $areaIcon ? $this->areaRepo->storeFile($request->file('icon')) : $area->icon;

        if ($areaIcon) {
            $this->areaRepo->updateArea($id);
        }
        $this->areaRepo->updateByID($id, $request->except('icon') +
            [
                'icon' => $icon
            ]);

        notify()->success('area Successfully Updated.', 'Updated');
        return redirect()->route('backend.areas.index');
    }

    public function destroy($id)
    {
        Gate::authorize('backend.areas.destroy');
        $this->areaRepo->deleteArea($id);
        notify()->warning('Area Successfully Deleted.', 'Deleted');
        return redirect()->route('backend.areas.index');
    }
}
