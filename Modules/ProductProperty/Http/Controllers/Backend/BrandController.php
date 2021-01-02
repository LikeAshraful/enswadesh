<?php

namespace Modules\ProductProperty\Http\Controllers\Backend;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\ProductProperty\Entities\Brand;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\Support\Renderable;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $brands = Brand::all();
        return view('productproperty::Backend.brand.index',compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('productproperty::Backend.brand.form');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //Image
        if ($image = $request->file('icon')) {
                
            $filename = rand(10, 100) . time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('/uploads/products/brandicon/' . $filename);
            Image::make($image)->resize(250, 250)->save($location);
        }

        $slug = Str::of($request->name)->slug('_');

        Brand::create($request->except(
            'icon',
            'description', 
            'slug'
        )+[
            'icon'              => $filename,
            'description'       => $request->description,
            'slug'              => $slug
            
        ]);
    
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
        $brand=Brand::find($id);
        return view('productproperty::Backend.brand.form',compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        $brand = Brand::find($id);
        if (!empty($request->name)) {
            $slug = Str::of($request->name)->slug('_');
        } else {
            $slug = $brand->slug;
        }

        if ($image = $request->file('icon')) {
            $icon = rand(10, 100) . time() . '.' . $image->getClientOriginalExtension();
            $locationc = public_path('/uploads/products/brandicon/' . $icon);
            Image::make($image)->resize(600, 400)->save($locationc);
            $oldFilename = $brand->icon;
            $brand->icon = $icon;
            Storage::delete('/uploads/products/brandicon/' . $oldFilename);
        }

        $brand->update($request->except(
                'icon',
                'description', 
                'slug'
            )+[
                'icon'              => $icon,
                'description'       => $request->description,
                'slug'              => $slug
            ]);

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
        $brand=Brand::find($id);

        $oldFilename = $brand->icon;
        Storage::delete('/uploads/products/brandicon/' . $oldFilename);
        $brand->delete();
        notify()->success("Product Brand Successfully Deleted", "Deleted");
        
        return back();
    }
}
