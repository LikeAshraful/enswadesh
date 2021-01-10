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
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        //Define Brand authorize gate
        Gate::authorize('backend.brand.index');

        //Access BrandInterface all function
        $brands = $this->brands->all();

        return view('backend.general.brand.index',compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        //Define Brand authorize gate
        Gate::authorize('backend.brand.create');

        return view('backend.general.brand.form');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //Access BrandInterface store function
        $brand = $this->brands->store($request->all());

        notify()->success('Product Brand Successfully Added.', 'Added');

        return redirect()->route('backend.brand.index');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('productproperty::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        //Define Brand authorize gate
        Gate::authorize('backend.brand.edit');

        //Access BrandInterface get function
        $brand = $this->brands->get($id);

        return view('backend.general.brand.form',compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //Access BrandInterface update function
        $brands = $this->brands->update($id,$request->all());

        notify()->success('Product Brand Successfully Updated.', 'Updated');

        return redirect()->route('backend.brand.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //Define Brand authorize gate
        Gate::authorize('backend.brand.destroy');

        //Access BrandInterface delete function
        $brand = $this->brands->delete($id);

        notify()->success("Product Brand Successfully Deleted", "Deleted");

        return back();
    }
}
