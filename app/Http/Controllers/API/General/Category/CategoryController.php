<?php

namespace App\Http\Controllers\API\General\Category;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\JsonResponseTrait;
use Repository\Category\CategoryRepository;
use App\Http\Resources\General\Category\CategoryResource;

class CategoryController extends Controller
{

    use JsonResponseTrait;

    public $categoryRepo;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepo = $categoryRepository;
    }

    public function index()
    {
        $allcategories = $this->categoryRepo->getAll();
        return $this->json(
            'Category list',
            CategoryResource::collection($allcategories)
        );
    }

    public function baseCategories()
    {
        $categories = $this->categoryRepo->getAllCategoriesByLevel();
        if($categories != null){
            return $this->json(
                'Base Category List',
                CategoryResource::collection($categories)
            );
        }

        return $this->bad('Something Wrong to Get categories!');
    }

    public function store(Request $request)
    {
        $icon = $request->hasFile('icon') ? $this->categoryRepo->storeFile($request->file('icon')) : null;
        $category = $this->categoryRepo->storeCategory($request->all(), $icon);
        return $this->json('category create successfully.', [
            'category' => $category
        ]);
    }

}