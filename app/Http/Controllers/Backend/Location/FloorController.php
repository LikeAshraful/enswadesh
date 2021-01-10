<?php

namespace App\Http\Controllers\Backend\Location;

use Illuminate\Http\Request;
use App\Models\Location\Floor;
use App\Models\Location\Market;
use App\Http\Controllers\Controller;

class FloorController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $floors = Floor::with('marketOfFloor')->get();
        return view('backend.location.floor.index',  compact('floors'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $markets = Market::all();
        return view('backend.location.floor.form', compact('markets'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $request->validate([
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
        return view('show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $markets = Market::all();
        $floor = Floor::find($id);
        return view('backend.location.floor.form', compact('floor', 'markets'));
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
