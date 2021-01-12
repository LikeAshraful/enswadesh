<?php

namespace App\Http\Controllers\Backend\General\Category;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Gate;
use App\Repositories\Interface\Category\CategoryInterface;

class CategoryController extends Controller
{
    protected $categories;
    
    public function __construct(CategoryInterface $categories)
    {
        $this->categories=$categories;

    }

    public function index()
    {
        Gate::authorize('backend.category.index');
        $categories = $this->categories->all();
        return view('backend.general.category.index',compact('categories'));
    }

    public function create()
    {
        Gate::authorize('backend.category.create');
        $categories = $this->categories->all();
        return view('backend.general.category.form',compact('categories'));

    }

    public function store(Request $request)
    {
        $category = $this->categories->store($request->all());
        return redirect()->route('backend.category.index');
    }

    public function show($id)
    {
        return view('productproperty::show');
    }

    public function edit($id)
    {
        Gate::authorize('backend.category.edit');
        $categories     = $this->categories->all();
        $category       = $this->categories->get($id);
        return view('backend.general.category.form',compact('category','categories'));
    }

    public function update($id, Request $request)
    {
        $category = $this->categories->update($id,$request->all());
        return redirect()->route('backend.category.index');
    }

    public function destroy($id)
    {
        Gate::authorize('backend.category.destroy');
        $categories = $this->categories->delete($id);
        return back();
    }
}