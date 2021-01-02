<?php

namespace Modules\ProductProperty\Http\Controllers\Backend;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\Support\Renderable;
use Modules\ProductProperty\Entities\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $categories = Category::all();
        // DD($categories[1]->subcategory);
        return view('productproperty::Backend.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $categories = Category::all();
        return view('productproperty::Backend.category.form',compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $level = Category::where('id', $request->parent_id)->first();
    
        if($level->level == 3){
            notify()->warning('Product Category level will be less then or equle 3.', 'Added');
            return back();
        }else{
             //Image
            if ($image = $request->file('icon')) {
                
                $filename = rand(10, 100) . time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('/uploads/products/categoriesicon/' . $filename);
                Image::make($image)->resize(250, 250)->save($location);
            }

            $slug = Str::of($request->name)->slug('_');

            $parent_id = $request->parent_id;

            if($parent_id != null){
                $parent_id = $request->parent_id;
            }else{
                $parent_id=0;
            }

            

            Category::create($request->except(
                    'icon',
                    'description', 
                    'slug',
                    'parent_id',
                    'level'
                )+[
                    'icon'              => $filename,
                    'description'       => $request->description,
                    'slug'              => $slug,
                    'parent_id'         => $parent_id,
                    'level'             => $level->level+1
                    
                ]);
            
            notify()->success('Product Category Successfully Added.', 'Added');
            return redirect()->route('backend.category.index');
        }

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
        $category=Category::find($id);

        return view('productproperty::Backend.category.form',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $icon = $category->icon;

        if (!empty($request->name)) {
            $slug = Str::of($request->name)->slug('_');
        } else {
            $slug = $category->slug;
        }

        if ($image = $request->file('icon')) {
            $icon = rand(10, 100) . time() . '.' . $image->getClientOriginalExtension();
            $locationc = public_path('/uploads/products/categoriesicon/' . $icon);
            Image::make($image)->resize(600, 400)->save($locationc);
            $oldFilename = $category->icon;
            $category->icon = $icon;
            Storage::delete('/uploads/products/categoriesicon/' . $oldFilename);
        }

        $category->update($request->except(
                'icon',
                'description', 
                'slug'
            )+[
                'icon'              => $icon,
                'description'       => $request->description,
                'slug'              => $slug
            ]);

        notify()->success('Product Category Successfully Updated.', 'Updated');
        return redirect()->route('backend.category.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $categories=Category::find($id);

        if($categories->parent_id != null)
        {
            notify()->warning("This category have sub categories, to delete you need to delete sub categories", "Warning");
        }
        else{
            $oldFilename = $categories->icon;
            Storage::delete('/uploads/products/categoriesicon/' . $oldFilename);
            $categories->delete();
            notify()->success("Product Category Successfully Deleted", "Deleted");
        }
        return back();

    }
}
