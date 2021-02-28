<?php

namespace App\Http\Controllers\Backend\Shop;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Repository\Shop\ShopTypeRepository;
use App\Http\Requests\Shop\StoreShopTypeRequest;
use App\Http\Requests\Shop\UpdateShopTypeRequest;

class ShopTypeController extends Controller
{
    public $shopTypeRepo;

    public function __construct(ShopTypeRepository $shopTypeRepository)
    {
        $this->shopTypeRepo = $shopTypeRepository;
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $shoptypes  = $this->shopTypeRepo->getAll();
        return view('backend.shop.shoptype.index',  compact('shoptypes'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('backend.shop.shoptype.form');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(StoreShopTypeRequest $request)
    {
        $this->shopTypeRepo->create($request->all());

        notify()->success('Shop type Successfully Added.', 'Added');
        return redirect()->route('backend.shoptypes.index');
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
        $shoptype = $this->shopTypeRepo->findByID($id);
        return view('backend.shop.shoptype.form', compact('shoptype'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(UpdateShopTypeRequest $request, $id)
    {
        $this->shopTypeRepo->updateByID($id, $request->all());

        notify()->success('Shop type Successfully Updated.', 'Updated');
        return redirect()->route('backend.shoptypes.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $this->shopTypeRepo->deletedByID($id);
        notify()->warning('Floor Successfully Deleted.', 'Deleted');
        return redirect()->route('backend.shoptypes.index');
    }
}
