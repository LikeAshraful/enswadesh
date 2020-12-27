<?php

namespace Modules\ProductProperty\Http\Controllers\Backend;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\ProductProperty\Entities\SubCategory;
use Modules\ProductProperty\Entities\MainCategory;
use Illuminate\Support\Str;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $subCategories = SubCategory::all();
        return view('productproperty::Backend.subCategory.index',compact('subCategories'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $mainCategories = MainCategory::all();
        return view('productproperty::Backend.subCategory.form',compact('mainCategories'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $slug = Str::of($request->sub_category_name)->slug('_');

        SubCategory::create($request->except('main_category_id ','sub_category_slug') +
            [
                'main_category_id'  => $request->main_category_id,
                'sub_category_slug'  => $slug
            ]);
        
        notify()->success('Product Sub Category Successfully Added.', 'Added');
        return redirect()->route('backend.sub_category.index');
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
    public function edit(SubCategory $subCategory)
    {
        $mainCategories = MainCategory::all();
        return view('productproperty::Backend.subCategory.form',compact('mainCategories','subCategory'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        $data = SubCategory::find($id);
        if (!empty($request->sub_category_name)) {
            $slug = Str::of($request->sub_category_name)->slug('_');
        } else {
            $slug = $data->sub_category_name;
        }
        // Product sub category update
        $data = $data->update($request->except('main_category_id', 'sub_category_slug') +
            [
                'main_category_id'      => $request->main_category_id,
                'sub_category_slug'     => $slug
            ]);

        notify()->success('Product Category Successfully Updated.', 'Updated');
        return redirect()->route('backend.sub_category.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy(SubCategory $subCategory)
    {
        $subCategory->delete();
        notify()->success("Product Sub Category Successfully Deleted", "Deleted");
        return back();
    }
}
