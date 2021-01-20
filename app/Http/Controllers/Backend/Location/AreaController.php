<?php

namespace App\Http\Controllers\Backend\Location;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Repository\Location\AreaRepository;
use Repository\Location\CityRepository;

class AreaController extends Controller
{
    public $areaRepo;
    public $cityRepo;

    public function __construct(AreaRepository $areaRepository, CityRepository $cityRepository)
    {
        $this->areaRepo = $areaRepository;
        $this->cityRepo = $cityRepository;
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        //Define Area authorize gate
        Gate::authorize('backend.areas.index');
        $areas = $this->areaRepo->getAll();
        return view('backend.location.area.index',  compact('areas'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        //Define Area authorize gate
        Gate::authorize('backend.areas.create');
        $cities = $this->cityRepo->getAll();
        return view('backend.location.area.form', compact('cities'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $request->validate([
            'area_name' => 'required',
            'area_description' => 'required',
            'area_icon' => 'required|mimes:jpeg,jpg,png|max:500',
        ]);

        $area_icon = $request->hasFile('area_icon') ? $this->areaRepo->storeFile($request->file('area_icon')) : null;
        $this->areaRepo->create($request->except('area_icon') +
            [
                'area_icon' => $area_icon
            ]);

        notify()->success('Area Successfully Added.', 'Added');
        return redirect()->route('backend.areas.index');
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
        //Define Area authorize gate
        Gate::authorize('backend.areas.edit');

        $cities = $this->cityRepo->getAll();
        $area = $this->areaRepo->findByID($id);
        return view('backend.location.area.form', compact('area', 'cities'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        $area = $this->areaRepo->findByID($id);

        $areaIcon = $request->hasFile('area_icon');

        $area_icon = $areaIcon ? $this->areaRepo->storeFile($request->file('area_icon')) : $area->area_icon;

        if ($areaIcon) {
            $this->areaRepo->updateArea($id);
        }

        $this->areaRepo->updateByID($id, $request->except('area_icon') +
            [
                'area_icon' => $area_icon
            ]);


        notify()->success('area Successfully Updated.', 'Updated');
        return redirect()->route('backend.areas.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //Define Area authorize gate
        Gate::authorize('backend.areas.destroy');

        $this->areaRepo->deleteArea($id);
        notify()->warning('Area Successfully Deleted.', 'Deleted');
        return redirect()->route('backend.areas.index');
    }
}
