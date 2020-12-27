<?php

namespace Modules\ShopProperty\Http\Controllers\Backend;

use Image;
use Storage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Intervention\Image\ImageManager;
use Modules\ShopProperty\Entities\Area;
use Illuminate\Contracts\Support\Renderable;
use Modules\ShopProperty\Entities\MarketPlace;

class MarketPlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $marketplaces = MarketPlace::with('areaOfMarketPlace')->get();
        return view('shopproperty::Backend.marketplace.index',  compact('marketplaces'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $areas = Area::all();
        return view('shopproperty::Backend.marketplace.form', compact('areas'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        request()->validate([
            'market_name' => 'required',
            'marketplace_address' => 'required',
            'marketplace_description' => 'required',
            'marketplace_icon' => 'required|mimes:jpeg,jpg,png|max:500',
        ]);

        if ($marketplace_icon = $request->file('marketplace_icon')) {
            $filename = rand(10, 100) . time() . '.' . $marketplace_icon->getClientOriginalExtension();
            $location = public_path('/uploads/shopproperty/marketplace/' . $filename);
            Image::make($marketplace_icon)->resize(600, 400)->save($location);
        }

        $slug = Str::of($request->market_name)->slug('_');
        MarketPlace::create($request->except('marketplace_icon', 'marketplace_slug') +
            [
                'marketplace_icon' => $filename,
                'marketplace_slug' => $slug
            ]);

        notify()->success('marketplace Successfully Added.', 'Added');
        return redirect()->route('backend.marketplaces.index');
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
        $marketplace = MarketPlace::find($id);
        return view('shopproperty::Backend.marketplace.form', compact('marketplace', 'areas'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        $data = MarketPlace::find($id);
        $marketplace_icon = $data->marketplace_icon;
        if (!empty($request->market_name)) {
            $slug = Str::of($request->market_name)->slug('_');
        } else {
            $slug = $data->marketplace_slug;
        }

        if ($image = $request->file('marketplace_icon')) {
            $marketplace_icon = rand(10, 100) . time() . '.' . $image->getClientOriginalExtension();
            $locationc = public_path('/uploads/shopproperty/marketplace/' . $marketplace_icon);
            Image::make($image)->resize(600, 400)->save($locationc);
            $oldFilenamec = $data->marketplace_icon;
            $data->marketplace_icon = $marketplace_icon;
            Storage::delete('/uploads/shopproperty/marketplace/' . $oldFilenamec);
        }

        // marketplace info update
        $data = $data->update($request->except('marketplace_slug', 'marketplace_icon') +
            [
                'marketplace_slug' => $slug,
                'marketplace_icon' => $marketplace_icon
            ]);

        notify()->success('marketplace Successfully Updated.', 'Updated');
        return redirect()->route('backend.marketplaces.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $data = MarketPlace::find($id);
        $oldFilename = $data->marketplace_icon;
        Storage::delete('/uploads/shopproperty/marketplace/' . $oldFilename);
        $data->delete();
        return redirect()->route('backend.marketplaces.index');
    }
}