<?php

namespace App\Http\Controllers\Backend\Location;

use Illuminate\Http\Request;
use App\Models\Location\Area;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Repository\Location\CityRepository;

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
        $areas = Area::where('city_id', $id)->pluck('area_name', 'id');
        return response()->json($areas);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $request->validate([
            'city_name' => 'required',
            'city_description' => 'required',
            'city_icon' => 'required|mimes:jpeg,jpg,png|max:500',
        ]);

        $city_icon = $request->hasFile('city_icon') ? $this->cityRepo->storeFile($request->file('city_icon')) : null;
        $this->cityRepo->create($request->except('city_icon') +
            [
                'city_icon' => $city_icon
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
    public function update(Request $request, $id)
    {
        $city = $this->cityRepo->findByID($id);

        $cityIcon = $request->hasFile('city_icon');

        $city_icon = $cityIcon ? $this->cityRepo->storeFile($request->file('city_icon')) : $city->city_icon;

        if ($cityIcon) {
            $this->cityRepo->updateCity($id);
        }

        $this->cityRepo->updateByID($id, $request->except('city_icon') +
            [
                'city_icon' => $city_icon
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
