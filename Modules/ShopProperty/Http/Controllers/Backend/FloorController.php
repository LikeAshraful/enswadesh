<?php

namespace Modules\ShopProperty\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\ShopProperty\Entities\Floor;
use Illuminate\Contracts\Support\Renderable;
use Modules\ShopProperty\Entities\MarketPlace;

class FloorController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $floors = Floor::with('marketPlaceOfFloor')->get();
        return view('shopproperty::Backend.floor.index',  compact('floors'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $marketplaces = MarketPlace::all();
        return view('shopproperty::Backend.floor.form', compact('marketplaces'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        request()->validate([
            'floor_no' => 'required',
            'floor_note' => 'required'
        ]);

        Floor::create($request->all());

        notify()->success('Floor Successfully Added.', 'Added');
        return redirect()->route('backend.floors.index');
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
        $marketplaces = MarketPlace::all();
        $floor = Floor::find($id);
        return view('shopproperty::Backend.floor.form', compact('floor', 'marketplaces'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        $data = Floor::find($id);

        // floor info update
        $data = $data->update($request->all());

        notify()->success('Floor Successfully Updated.', 'Updated');
        return redirect()->route('backend.floors.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $data = Floor::find($id);
        $data->delete();
        return redirect()->route('backend.floors.index');
    }
}