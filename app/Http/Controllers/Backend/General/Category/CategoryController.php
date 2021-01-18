<?php

namespace App\Http\Controllers\Backend\General\Category;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Gate;
use Repository\Category\CategoryRepository;

class CategoryController extends Controller
{
    protected $categoryRepo;
    
    public function __construct(CategoryRepository $CategoryRepository)
    {
        $this->categoryRepo=$CategoryRepository;

    }

    public function index()
    {
        Gate::authorize('backend.category.index');
        $categories = $this->categoryRepo->getAll();
        return view('backend.general.category.index',compact('categories'));
    }

    public function create()
    {
        Gate::authorize('backend.category.create');
        $categories = $this->categoryRepo->getAll();
        return view('backend.general.category.form',compact('categories'));

    }

    public function store(Request $request)
    {
        $icon = $request->hasFile('icon') ? $this->categoryRepo->storeFile($request->file('icon')) : null;
        $this->categoryRepo->storeCategory($request->all(), $icon);
        return redirect()->route('backend.category.index');
    }

    public function show($id)
    {
        return view('productproperty::show');
    }

    public function edit($id)
    {
        Gate::authorize('backend.category.edit');
        $categories     = $this->categoryRepo->getAll();
        $category       = $this->categoryRepo->findByID($id);
        return view('backend.general.category.form',compact('category','categories'));
    }

    public function update(Request $request, $id)
    {
        $category      = $this->categoryRepo->findByID($id);
        $categoryIcon  = $request->hasFile('icon');
        $icon          = $categoryIcon ? $this->categoryRepo->storeFile($request->file('icon')) : $category->icon;
        if($categoryIcon)
        {
            $this->categoryRepo->updateCategoryIcon($id);
        }
        $this->categoryRepo->updateCategory($id, $request->all(), $icon);
        return redirect()->route('backend.category.index');
    }

    public function destroy($id)
    {
        Gate::authorize('backend.category.destroy');
        $icon       = $this->categoryRepo->deleteCategory($id);
        notify()->success("Product Category Successfully Deleted", "Deleted");
        return back();
    }
}