<?php

namespace Modules\ShopProperty\Http\Controllers\Backend;

use Image;
use Storage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Intervention\Image\ImageManager;
use Modules\ShopProperty\Entities\Area;
use Modules\ShopProperty\Entities\Thana;
use Illuminate\Contracts\Support\Renderable;

class ThanaController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $thanas = Thana::with('areaOfthana')->get();
        return view('shopproperty::Backend.thana.index',  compact('thanas'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $areas = Area::all();
        return view('shopproperty::Backend.thana.form', compact('areas'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $request->validate([
            'thana_name' => 'required',
            'thana_description' => 'required',
            'thana_icon' => 'required|mimes:jpeg,jpg,png|max:500',
        ]);

        if ($thana_icon = $request->file('thana_icon')) {
            $filename = rand(10, 100) . time() . '.' . $thana_icon->getClientOriginalExtension();
            $location = public_path('/uploads/shopproperty/thana/' . $filename);
            Image::make($thana_icon)->resize(600, 400)->save($location);
        }

        $slug = Str::of($request->thana_name)->slug('_');
        Thana::create($request->except('thana_icon', 'thana_slug') +
            [
                'thana_icon' => $filename,
                'thana_slug' => $slug
            ]);

        notify()->success('thana Successfully Added.', 'Added');
        return redirect()->route('backend.thanas.index');
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
        $areas = Area::all();
        $thana = Thana::find($id);
        return view('shopproperty::Backend.thana.form', compact('thana', 'areas'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        $data = Thana::find($id);
        $thana_icon = $data->thana_icon;
        if (!empty($request->thana_name)) {
            $slug = Str::of($request->thana_name)->slug('_');
        } else {
            $slug = $data->thana_slug;
        }

        if ($image = $request->file('thana_icon')) {
            $thana_icon = rand(10, 100) . time() . '.' . $image->getClientOriginalExtension();
            $locationc = public_path('/uploads/shopproperty/thana/' . $thana_icon);
            Image::make($image)->resize(600, 400)->save($locationc);
            $oldFilenamec = $data->thana_icon;
            $data->thana_icon = $thana_icon;
            Storage::delete('/uploads/shopproperty/thana/' . $oldFilenamec);
        }

        // thana info update
        $data = $data->update($request->except('thana_slug', 'thana_icon') +
            [
                'thana_slug' => $slug,
                'thana_icon' => $thana_icon
            ]);

        notify()->success('thana Successfully Updated.', 'Updated');
        return redirect()->route('backend.thanas.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $data = Thana::find($id);
        $oldFilename = $data->thana_icon;
        Storage::delete('/uploads/shopproperty/thana/' . $oldFilename);
        $data->delete();
        return redirect()->route('backend.thanas.index');
    }
}
