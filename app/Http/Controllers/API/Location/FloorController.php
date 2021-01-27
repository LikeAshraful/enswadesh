<?php

namespace App\Http\Controllers\API\Location;

use Illuminate\Http\Request;
use App\Models\Location\Floor;
use Illuminate\Routing\Controller;
use Repository\Location\FloorRepository;
use App\Http\Controllers\JsonResponseTrait;
use Illuminate\Contracts\Support\Renderable;
use App\Http\Resources\Location\FloorResource;

class FloorController extends Controller
{
    use JsonResponseTrait;

    public $floorRepo;

    public function __construct(FloorRepository $floorRepository)
    {
        $this->floorRepo = $floorRepository;
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $allFloors = $this->floorRepo->getAll();
        return $this->json(
            'Floor list',
            FloorResource::collection($allFloors)
        );
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('shopproperty::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
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
        return view('shopproperty::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
