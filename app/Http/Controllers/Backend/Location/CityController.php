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

    public function index()
    {
        Gate::authorize('backend.cities.index');
        $cities = $this->cityRepo->getAll();
        return view('backend.location.city.index',  compact('cities'));
    }

    public function create()
    {
        Gate::authorize('backend.cities.create');
        return view('backend.location.city.form');
    }

    public function getCities($id) {
        $areas = Area::where('city_id', $id)->pluck('name', 'id');
        return response()->json($areas);
    }

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

    public function show($id)
    {
        return view('show');
    }

    public function edit($id)
    {
        Gate::authorize('backend.cities.edit');
        $city = $this->cityRepo->findByID($id);
        return view('backend.location.city.form', compact('city'));
    }

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

    public function destroy($id)
    {
        Gate::authorize('backend.cities.destroy');
        $this->cityRepo->deleteCity($id);
        notify()->warning('City Successfully Deleted.', 'Deleted');
        return redirect()->route('backend.cities.index');
    }
}
