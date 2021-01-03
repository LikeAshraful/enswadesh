<?php

namespace App\Http\Controllers\Backend\Location;

use Image;
use Storage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Location\Area;
use App\Models\Location\City;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManager;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $areas = Area::with('cityOfArea')->get();
        return view('backend.location.area.index',  compact('areas'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $cities = City::all();
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
            //'area_icon' => 'required|mimes:jpeg,jpg,png|max:500',
        ]);

        if ($area_icon = $request->file('area_icon')) {
            $filename = rand(10, 100) . time() . '.' . $area_icon->getClientOriginalExtension();
            $location = public_path('/uploads/shopproperty/area/' . $filename);
            Image::make($area_icon)->resize(600, 400)->save($location);
        }

        $slug = Str::of($request->area_name)->slug('_');
        Area::create($request->except('area_icon', 'area_slug') +
            [
                'area_icon' => $filename,
                'area_slug' => $slug
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
        $cities = City::all();
        $area = area::find($id);
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
        $data = Area::find($id);
        $area_icon = $data->area_icon;
        if (!empty($request->area_name)) {
            $slug = Str::of($request->area_name)->slug('_');
        } else {
            $slug = $data->area_slug;
        }

        if ($image = $request->file('area_icon')) {
            $area_icon = rand(10, 100) . time() . '.' . $image->getClientOriginalExtension();
            $locationc = public_path('/uploads/shopproperty/area/' . $area_icon);
            Image::make($image)->resize(600, 400)->save($locationc);
            $oldFilenamec = $data->area_icon;
            $data->area_icon = $area_icon;
            Storage::delete('/uploads/shopproperty/area/' . $oldFilenamec);
        }

        // area info update
        $data = $data->update($request->except('area_slug', 'area_icon') +
            [
                'area_slug' => $slug,
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
        $data = Area::find($id);
        $oldFilename = $data->area_icon;
        Storage::delete('/uploads/shopproperty/area/' . $oldFilename);
        $data->delete();
        return redirect()->route('backend.areas.index');
    }
}
