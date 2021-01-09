<?php

namespace App\Http\Controllers\API\General\Menu;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\General\Menu\AppMenu;
use Illuminate\Contracts\Support\Renderable;
use App\Http\Resources\General\Menu\AppMenuResource;

class ApiAppMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return AppMenuResource::collection(AppMenu::all());
        // $status = 200;
        // $appmenus = AppMenu::all();
        // return response()->json($appmenus, $status);
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
