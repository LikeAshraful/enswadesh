<?php

namespace App\Http\Controllers\Backend\General\Category;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Repositories\Interface\Category\CategoryInterface;


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
        //Access CategoryInterface all function
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
        //Access CategoryInterface all function
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
        //Access CategoryInterface store function
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
        //Access CategoryInterface all function
        $categories     = $this->categories->all();

        //Access CategoryInterface get function
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
        //Access CategoryInterface update function
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
        //Access CategoryInterface delete function
        $categories = $this->categories->delete($id);
        
        return back();

    }
}