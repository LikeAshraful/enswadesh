<?php

namespace Modules\ShopProperty\Http\Controllers\Backend;

use Image;
use Storage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Intervention\Image\ImageManager;
use Modules\ShopProperty\Entities\City;
use Illuminate\Contracts\Support\Renderable;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $cities = City::all();
        return view('shopproperty::Backend.city.index',  compact('cities'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('shopproperty::Backend.city.form');
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

        if ($city_icon = $request->file('city_icon')) {
            $filename = rand(10, 100) . time() . '.' . $city_icon->getClientOriginalExtension();
            $location = public_path('/uploads/shopproperty/city/' . $filename);
            Image::make($city_icon)->resize(600, 400)->save($location);
        }

        $slug = Str::of($request->city_name)->slug('_');
        City::create($request->except('city_icon', 'city_slug') +
            [
                'city_icon' => $filename,
                'city_slug' => $slug
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
        return view('shopproperty::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $city = City::find($id);
        return view('shopproperty::Backend.city.form', compact('city'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        $data = City::find($id);
        $city_icon = $data->city_icon;
        if (!empty($request->city_name)) {
            $slug = Str::of($request->city_name)->slug('_');
        } else {
            $slug = $data->city_slug;
        }

        if ($image = $request->file('city_icon')) {
            $city_icon = rand(10, 100) . time() . '.' . $image->getClientOriginalExtension();
            $locationc = public_path('/uploads/shopproperty/city/' . $city_icon);
            Image::make($image)->resize(600, 400)->save($locationc);
            $oldFilenamec = $data->city_icon;
            $data->city_icon = $city_icon;
            Storage::delete('/uploads/shopproperty/city/' . $oldFilenamec);
        }

        // city info update
        $data = $data->update($request->except('city_slug', 'city_icon') +
            [
                'city_slug' => $slug,
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
        $data = City::find($id);
        $oldFilename = $data->city_icon;
        Storage::delete('/uploads/shopproperty/city/' . $oldFilename);
        $data->delete();
        return redirect()->route('backend.cities.index');
    }
}