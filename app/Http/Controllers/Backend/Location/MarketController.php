<?php

namespace App\Http\Controllers\Backend\Location;

use Image;
use Storage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Location\Thana;
use App\Models\Location\Market;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManager;

class MarketController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $markets = Market::with('thanaOfMarket')->get();
        return view('backend.location.market.index',  compact('markets'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $thanas = Thana::all();
        return view('backend.location.market.form', compact('thanas'));
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
            'market_address' => 'required',
            'market_description' => 'required',
            'market_icon' => 'required|mimes:jpeg,jpg,png|max:500',
        ]);

        if ($market_icon = $request->file('market_icon')) {
            $filename = rand(10, 100) . time() . '.' . $market_icon->getClientOriginalExtension();
            $location = public_path('/uploads/shopproperty/market/' . $filename);
            Image::make($market_icon)->resize(600, 400)->save($location);
        }

        $slug = Str::of($request->market_name)->slug('_');
        Market::create($request->except('market_icon', 'market_slug') +
            [
                'market_icon' => $filename,
                'market_slug' => $slug
            ]);

        notify()->success('market Successfully Added.', 'Added');
        return redirect()->route('backend.markets.index');
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
        $thanas = Thana::all();
        $market = Market::find($id);
        return view('backend.location.market.form', compact('market', 'thanas'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        $data = Market::find($id);
        $market_icon = $data->market_icon;
        if (!empty($request->market_name)) {
            $slug = Str::of($request->market_name)->slug('_');
        } else {
            $slug = $data->market_slug;
        }

        if ($image = $request->file('market_icon')) {
            $market_icon = rand(10, 100) . time() . '.' . $image->getClientOriginalExtension();
            $locationc = public_path('/uploads/shopproperty/market/' . $market_icon);
            Image::make($image)->resize(600, 400)->save($locationc);
            $oldFilenamec = $data->market_icon;
            $data->market_icon = $market_icon;
            Storage::delete('/uploads/shopproperty/market/' . $oldFilenamec);
        }

        // market info update
        $data = $data->update($request->except('market_slug', 'market_icon') +
            [
                'market_slug' => $slug,
                'market_icon' => $market_icon
            ]);

        notify()->success('market Successfully Updated.', 'Updated');
        return redirect()->route('backend.markets.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $data = Market::find($id);
        $oldFilename = $data->market_icon;
        Storage::delete('/uploads/shopproperty/market/' . $oldFilename);
        $data->delete();
        return redirect()->route('backend.markets.index');
    }
}