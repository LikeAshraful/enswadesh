<?php

namespace App\Http\Controllers\API\Location;

use Illuminate\Http\Request;
use App\Models\Location\Area;
use Illuminate\Routing\Controller;
use Repository\Location\AreaRepository;
use App\Http\Controllers\JsonResponseTrait;
use Illuminate\Contracts\Support\Renderable;
use App\Http\Resources\Location\AreaResource;

class AreaController extends Controller
{
    use JsonResponseTrait;

    public $areaRepo;

    public function __construct(AreaRepository $areaRepository)
    {
        $this->areaRepo = $areaRepository;
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $allAreas = $this->areaRepo->getAll();
        return $this->json(
            'Area list',
            AreaResource::collection($allAreas)
        );
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function areaByCity($id)
    {
        $areasByCity = $this->areaRepo->areaByCityId($id);
        return $this->json(
            'Area list by city',
            AreaResource::collection($areasByCity)
        );
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
