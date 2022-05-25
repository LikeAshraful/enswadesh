<?php

namespace App\Http\Controllers\Backend\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
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

    public function index()
    {
        Gate::authorize('backend.shoptypes.index');
        $shoptypes  = $this->shopTypeRepo->getAll();
        return view('backend.shop.shoptype.index',  compact('shoptypes'));
    }

    public function create()
    {
        Gate::authorize('backend.shoptypes.create');
        return view('backend.shop.shoptype.form');
    }

    public function store(StoreShopTypeRequest $request)
    {
        $this->shopTypeRepo->create($request->all());
        notify()->success('Shop type Successfully Added.', 'Added');
        return redirect()->route('backend.shoptypes.index');
    }

    public function show($id)
    {
        return view('show');
    }

    public function edit($id)
    {
        Gate::authorize('backend.shoptypes.edit');
        $shoptype = $this->shopTypeRepo->findByID($id);
        return view('backend.shop.shoptype.form', compact('shoptype'));
    }

    public function update(UpdateShopTypeRequest $request, $id)
    {
        $this->shopTypeRepo->updateByID($id, $request->all());
        notify()->success('Shop type Successfully Updated.', 'Updated');
        return redirect()->route('backend.shoptypes.index');
    }

    public function destroy($id)
    {
        Gate::authorize('backend.shoptypes.destroy');
        $this->shopTypeRepo->deletedByID($id);
        notify()->warning('Floor Successfully Deleted.', 'Deleted');
        return redirect()->route('backend.shoptypes.index');
    }
}
