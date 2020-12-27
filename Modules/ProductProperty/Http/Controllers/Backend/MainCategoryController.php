<?php

namespace Modules\ProductProperty\Http\Controllers\Backend;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\ProductProperty\Entities\MainCategory;
use Modules\ProductProperty\Entities\SubCategory;
use Illuminate\Support\Str;
use Image;
use Storage;
use Intervention\Image\ImageManager;

class MainCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $mainCategories = MainCategory::all();
        // dd($mainCategories->get(1)->mainWithSubCategories());
        return view('productproperty::Backend.mainCategory.index',compact('mainCategories'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('productproperty::Backend.mainCategory.form');
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
            $location = public_path('/uploads/products/categoriesicon/' . $filename);
            Image::make($image)->resize(250, 250)->save($location);
        }

        $slug = Str::of($request->main_category_name)->slug('_');

        MainCategory::create($request->except('icon', 'main_category_slug') +
            [
                'icon'                  => $filename,
                'main_category_slug'    => $slug
            ]);
        
        notify()->success('Product Category Successfully Added.', 'Added');
        return redirect()->route('backend.main_category.index');
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
    public function edit(MainCategory $mainCategory)
    {
        return view('productproperty::Backend.mainCategory.form',compact('mainCategory'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        $data = MainCategory::find($id);
        $icon = $data->icon;
        if (!empty($request->main_category_name)) {
            $slug = Str::of($request->main_category_name)->slug('_');
        } else {
            $slug = $data->main_category_name;
        }

        if ($image = $request->file('icon')) {
            $icon = rand(10, 100) . time() . '.' . $image->getClientOriginalExtension();
            $locationc = public_path('/uploads/products/categoriesicon/' . $icon);
            Image::make($image)->resize(250, 250)->save($locationc);
            $oldFilenamec = $data->icon;
            $data->icon = $icon;
            Storage::delete('/uploads/products/categoriesicon/' . $oldFilenamec);
        }

        // Product category update
        $data = $data->update($request->except('icon', 'main_category_slug') +
            [
                'icon'                  => $icon,
                'main_category_slug'    => $slug
            ]);

        notify()->success('Product Category Successfully Updated.', 'Updated');
        return redirect()->route('backend.main_category.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy(MainCategory $mainCategory)
    {
        // $sub_category = SubCategory::where('main_category_id',$mainCategory->id)->get();
        // dd($sub_category);
        if($mainCategory->mainWithSubCategories != null)
        {
            notify()->warning("This category have sub categories, to delete you need to delete sub categories", "Warning");
        }
        else{

            $mainCategory->delete();
            notify()->success("Product Category Successfully Deleted", "Deleted");
        }
        return back();
    }
}
