<?php

namespace App\Http\Controllers\Backend\Location;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Repository\Location\FloorRepository;
use Repository\Location\MarketRepository;

class FloorController extends Controller
{
    public $floorRepo;
    public $marketRepo;

    public function __construct(FloorRepository $floorRepository, MarketRepository $marketRepository)
    {
        $this->floorRepo = $floorRepository;
        $this->marketRepo = $marketRepository;
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $floors = $this->floorRepo->getAll();
        return view('backend.location.floor.index',  compact('floors'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $markets = $this->marketRepo->getAll();
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
            'market_id'     => 'required',
            'floor_no'      => 'required',
            'floor_note'    => 'required'
        ]);

        $this->floorRepo->create($request->all());

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
        $markets = $this->marketRepo->getAll();
        $floor = $this->floorRepo->findByID($id);
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
        $this->floorRepo->updateByID($id, $request->all());

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
        $this->floorRepo->deletedByID($id);
        notify()->warning('Floor Successfully Deleted.', 'Deleted');
        return redirect()->route('backend.floors.index');
    }
}
