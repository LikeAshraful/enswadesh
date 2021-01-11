<?php

namespace App\Http\Controllers\API\General\Menu;

use App\Http\Controllers\JsonResponseTrait;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Contracts\Support\Renderable;
use App\Http\Resources\General\Menu\AppMenuResource;
use Repository\General\AppMenuRepository;

class ApiAppMenuController extends Controller
{

    use JsonResponseTrait;

    public $appMenuRepo;

    public function __construct(AppMenuRepository $appMenuRepository)
    {
        $this->appMenuRepo = $appMenuRepository;
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $allMenu = $this->appMenuRepo->getAll();
        return $this->json(
            'Menu list',
            AppMenuResource::collection($allMenu)
        );
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        // Todo for validation
        $appMenu = $this->appMenuRepo->create($request->all());
        return $this->json(
            'AppMenu created successfully',
            $appMenu
        );
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
