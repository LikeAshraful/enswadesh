<?php

namespace App\Http\Controllers\Backend\Location;

use App\Http\Controllers\Controller;
use App\Models\Location\Area;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Repository\Location\CityRepository;
use App\Http\Requests\Location\City\StoreCityRequest;
use App\Http\Requests\Location\City\UpdateCityRequest;

class CityController extends Controller
{
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
        Gate::authorize('backend.cities.index');
        $cities = $this->cityRepo->getAll();
        return view('backend.location.city.index',  compact('cities'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        //Define Cities authorize gate
        Gate::authorize('backend.cities.create');

        return view('backend.location.city.form');
    }

    public function getCities($id) {
        $areas = Area::where('city_id', $id)->pluck('name', 'id');
        return response()->json($areas);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(StoreCityRequest $request)
    {
        $icon = $request->hasFile('icon') ? $this->cityRepo->storeFile($request->file('icon')) : null;
        $this->cityRepo->create($request->except('icon') +
            [
                'icon' => $icon
            ]);

        notify()->success('City Successfully Added.', 'Added');
        return redirect()->route('backend.cities.index');
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
        //Define Cities authorize gate
        Gate::authorize('backend.cities.edit');

        $city = $this->cityRepo->findByID($id);
        return view('backend.location.city.form', compact('city'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(UpdateCityRequest $request, $id)
    {
        $city = $this->cityRepo->findByID($id);

        $cityIcon = $request->hasFile('icon');

        $icon = $cityIcon ? $this->cityRepo->storeFile($request->file('icon')) : $city->icon;

        if ($cityIcon) {
            $this->cityRepo->updateCity($id);
        }

        $this->cityRepo->updateByID($id, $request->except('icon') +
            [
                'icon' => $icon
            ]);

        notify()->success('City Successfully Updated.', 'Updated');
        return redirect()->route('backend.cities.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //Define Cities authorize gate
        Gate::authorize('backend.cities.destroy');

        $this->cityRepo->deleteCity($id);
        notify()->warning('City Successfully Deleted.', 'Deleted');
        return redirect()->route('backend.cities.index');
    }
}
