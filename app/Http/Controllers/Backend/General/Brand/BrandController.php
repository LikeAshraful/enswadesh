<?php

namespace App\Http\Controllers\Backend\General\Brand;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Gate;
use Repository\Brand\BrandRepository;

class BrandController extends Controller
{
    protected $brandRepo;

    public function __construct(BrandRepository $brandRepository)
    {
        $this->brandRepo = $brandRepository;

    }
    
    public function index()
    {
        Gate::authorize('backend.brand.index');
        $brands = $this->brandRepo->getAll();
        return view('backend.general.brand.index',compact('brands'));
    }

    public function create()
    {
        Gate::authorize('backend.brand.create');
        return view('backend.general.brand.form');
    }

    public function store(Request $request)
    {
        $icon = $request->hasFile('icon') ? $this->brandRepo->storeFile($request->file('icon')) : null;
        $brand = $this->brandRepo->create($request->except('icon') + [
            'icon' => $icon
        ]);
        notify()->success('Product Brand Successfully Added.', 'Added');
        return redirect()->route('backend.brand.index');
    }

    public function show($id)
    {
        return view('productproperty::show');
    }

    public function edit($id)
    {
        Gate::authorize('backend.brand.edit');
        $brand = $this->brandRepo->findByID($id);
        return view('backend.general.brand.form',compact('brand'));
    }

    public function update(Request $request, $id)
    {
        $brand      = $this->brandRepo->findByID($id);
        $brandIcon  = $request->hasFile('icon');
        $icon       = $brandIcon ? $this->brandRepo->storeFile($request->file('icon')) : $brand->icon;
        if($brandIcon)
        {
            $this->brandRepo->updateBrandIcon($id);
        }
        $brand  = $this->brandRepo->updateByID($id,$request->except('icon') + [
            'icon' => $icon
        ]);
        notify()->success('Product Brand Successfully Updated.', 'Updated');
        return redirect()->route('backend.brand.index');
    }

    public function destroy($id)
    {
        Gate::authorize('backend.brand.destroy');
        $icon   = $this->brandRepo->deleteBrand($id);
        notify()->success("Product Brand Successfully Deleted", "Deleted");
        return back();
    }
}
