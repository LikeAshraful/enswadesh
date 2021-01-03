<?php

namespace Modules\ShopProperty\Http\Controllers\Backend;

use Image;
use Storage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Intervention\Image\ImageManager;
use Modules\ShopProperty\Entities\Area;
use Modules\ShopProperty\Entities\City;
use Modules\ShopProperty\Entities\Shop;
use Modules\ShopProperty\Entities\Floor;
use Modules\ShopProperty\Entities\Thana;
use Illuminate\Contracts\Support\Renderable;
use Modules\ShopProperty\Entities\MarketPlace;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $shops = Shop::all();
        return view('shopproperty::Backend.shop.index',  compact('shops'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $cities = City::all();
        $areas = Area::all();
        $thanas = Thana::all();
        $marketplaces = MarketPlace::all();
        $floors = Floor::all();
        return view('shopproperty::Backend.shop.form', compact('cities','areas','thanas','marketplaces','floors'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $request->validate([
            'market_name' => 'required',
            'shop_address' => 'required',
            'shop_description' => 'required',
            'shop_icon' => 'required|mimes:jpeg,jpg,png|max:500',
        ]);

        if ($shop_icon = $request->file('shop_icon')) {
            $filename = rand(10, 100) . time() . '.' . $shop_icon->getClientOriginalExtension();
            $location = public_path('/uploads/shopproperty/shop/' . $filename);
            Image::make($shop_icon)->resize(600, 400)->save($location);
        }

        $slug = Str::of($request->market_name)->slug('_');
        Shop::create($request->except('shop_icon', 'shop_slug') +
            [
                'shop_icon' => $filename,
                'shop_slug' => $slug
            ]);

        notify()->success('shop Successfully Added.', 'Added');
        return redirect()->route('backend.shops.index');
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
        $shop = Shop::find($id);
        return view('shopproperty::Backend.shop.form', compact('shop', 'areas'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        $data = Shop::find($id);
        $shop_icon = $data->shop_icon;
        if (!empty($request->market_name)) {
            $slug = Str::of($request->market_name)->slug('_');
        } else {
            $slug = $data->shop_slug;
        }

        if ($image = $request->file('shop_icon')) {
            $shop_icon = rand(10, 100) . time() . '.' . $image->getClientOriginalExtension();
            $locationc = public_path('/uploads/shopproperty/shop/' . $shop_icon);
            Image::make($image)->resize(600, 400)->save($locationc);
            $oldFilenamec = $data->shop_icon;
            $data->shop_icon = $shop_icon;
            Storage::delete('/uploads/shopproperty/shop/' . $oldFilenamec);
        }

        // shop info update
        $data = $data->update($request->except('shop_slug', 'shop_icon') +
            [
                'shop_slug' => $slug,
                'shop_icon' => $shop_icon
            ]);

        notify()->success('shop Successfully Updated.', 'Updated');
        return redirect()->route('backend.shops.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $data = Shop::find($id);
        $oldFilename = $data->shop_icon;
        Storage::delete('/uploads/shopproperty/shop/' . $oldFilename);
        $data->delete();
        return redirect()->route('backend.shops.index');
    }
}
