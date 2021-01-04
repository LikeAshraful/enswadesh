<?php

namespace App\Http\Controllers\Backend\General\Category;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use App\Models\General\Category\Category;
use Illuminate\Contracts\Support\Renderable;
use App\Repositories\Interface\CategoryInterface;


class CategoryController extends Controller
{
    protected $categories;
    
    public function __construct(CategoryInterface $categories)
    {
        $this->categories=$categories;

    }
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $categories = $this->categories->all();
        // dd($categories[1]->subcategory);
        return view('backend.general.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $categories = $this->categories->all();
        return view('backend.general.category.form',compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $category = $this->categories->store($request->all());

        return redirect()->route('backend.category.index');
        

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
        $categories     = $this->categories->all();
        $category       = $this->categories->get($id);
    
        return view('backend.general.category.form',compact('category','categories'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update($id, Request $request)
    {
        $category = $this->categories->update($id,$request->all());
        return redirect()->route('backend.category.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        // $categories = $this->categories->get($id);
        // $sub_category = $categories->parent_id;
        // dd($categories->parent_id);

        // $category=Category::find($id);
        // $categories=Category::where('id', $category->parent_id)->get();
        // dd($categories->delete());

        
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