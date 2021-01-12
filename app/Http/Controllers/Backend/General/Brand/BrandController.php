<?php

namespace App\Http\Controllers\Backend\General\Brand;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Gate;
use App\Repositories\Interface\Brand\BrandInterface;

class BrandController extends Controller
{
    protected $brands;
    public function __construct(BrandInterface $brands)
    {
        $this->brands=$brands;

    }
    
    public function index()
    {
        Gate::authorize('backend.brand.index');
        $brands = $this->brands->all();
        return view('backend.general.brand.index',compact('brands'));
    }

    public function create()
    {
        Gate::authorize('backend.brand.create');
        return view('backend.general.brand.form');
    }

    public function store(Request $request)
    {
        $brand = $this->brands->store($request->all());
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
        $brand = $this->brands->get($id);
        return view('backend.general.brand.form',compact('brand'));
    }

    public function update(Request $request, $id)
    {
        $brands = $this->brands->update($id,$request->all());
        notify()->success('Product Brand Successfully Updated.', 'Updated');
        return redirect()->route('backend.brand.index');
    }

    public function destroy($id)
    {
        Gate::authorize('backend.brand.destroy');
        $brand = $this->brands->delete($id);
        notify()->success("Product Brand Successfully Deleted", "Deleted");
        return back();
    }
}
