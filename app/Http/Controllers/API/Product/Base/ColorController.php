<?php

namespace App\Http\Controllers\API\Product\Base;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\JsonResponseTrait;
use Repository\Product\Base\ColorRepository;
use App\Http\Resources\Product\Base\ColorResource;

class ColorController extends Controller
{
    use JsonResponseTrait;

    public $colorRepo;

    public function __construct(ColorRepository $colorRepository)
    {
        $this->colorRepo = $colorRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $colors = $this->colorRepo->getAll();

        return $this->json(
            "Color List",
            ColorResource::collection($colors)
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
