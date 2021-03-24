<?php

namespace App\Http\Controllers\Backend\Product;

use Illuminate\Http\Request;
use App\Models\Product\Product;
use Illuminate\Support\Facades\DB;
use Repository\Shop\ShopRepository;
use App\Http\Controllers\Controller;
use App\Models\Product\ProductMedia;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Repository\Brand\BrandRepository;
use Repository\Product\ProductRepository;
use Repository\Category\CategoryRepository;
use Repository\Product\ProductMediaRepository;
use Repository\Product\ProductCategoryRepository;

class ProductController extends Controller
{
    public $shopRepo;
    public $categoryRepo;
    public $brandRepo;
    public $proCategoryRepo;
    public $proMediaRepo;
    public $productRepo;

    public function __construct(ShopRepository $shopRepository, CategoryRepository $categoryRepository, BrandRepository $brandRepository, ProductCategoryRepository $productCategoryRepository, ProductMediaRepository $productMediaRepository, ProductRepository $productRepository)
    {
        $this->shopRepo = $shopRepository;
        $this->categoryRepo = $categoryRepository;
        $this->brandRepo = $brandRepository;
        $this->proCategoryRepo = $productCategoryRepository;
        $this->proMediaRepo = $productMediaRepository;
        $this->productRepo = $productRepository;
    }

    public function index()
    {
        Gate::authorize('backend.products.index');
        $products = $this->productRepo->getAll();
        return view('backend.product.product.index', compact('products'));
    }

    public function create()
    {
        Gate::authorize('backend.products.create');
        $shops = $this->shopRepo->getAll();
        $categories = $this->categoryRepo->getAll();
        $brands = $this->brandRepo->getAll();
        return view('backend.product.product.form', compact('shops', 'categories', 'brands'));

    }

    public function store(Request $request)
    {
        $request->validate([
            'name'           => 'required',
            'shop_id'        => 'required',
            'src' => 'required|mimes:jpeg,jpg,png|max:500',
        ]);

        DB::beginTransaction();
        try {
            $product = $this->productRepo->create($request->except('user_id') +
            [
                'user_id'         => Auth::id()
            ]);
            $this->proMediaRepo->create($request->except('src', 'product_id', 'type') +
                [
                    'src'        => $request->hasFile('src') ? $this->proMediaRepo->storeFile($request->file('src')) : null,
                    'product_id' => $product->id,
                    'type' => 'image'
                ]);
            $this->proCategoryRepo->create($request->except('product_id') +
                [
                    'product_id' => $product->id,
                ]);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json($e);
        }
        notify()->success('Product Successfully Added.', 'Added');
        return redirect()->route('backend.products.index');
    }

    public function edit($id)
    {
        Gate::authorize('backend.products.edit');
        $product = Product::with('category')->find($id);
        $shops = $this->shopRepo->getAll();
        $categories = $this->categoryRepo->getAll();
        $brands = $this->brandRepo->getAll();
        return view('backend.product.product.form', compact('product', 'shops', 'categories', 'brands'));
    }

    public function update(Request $request, $id)
    {
        DB::beginTransaction();
            try {
            $this->productRepo->updateByID($id, $request->except('user_id') +
                [
                    'user_id'         => Auth::id()
                ]);
            $productMedida = $this->proMediaRepo->updateProductMediaById($id);
            $srcImage = $request->hasFile('src');
            $src = $srcImage ? $this->proMediaRepo->storeFile($request->file('src')) : $productMedida->src;
            if ($srcImage) {
                $this->proMediaRepo->updateProductMedia($id);
            }
            $this->proMediaRepo->productMediaUpdateByID($id, $request->except('src', 'product_id', 'type') +
                    [
                        'src'        => $src,
                        'product_id' => $id,
                        'type' => 'image'
                    ]);
            $this->proCategoryRepo->updateProductCategoryById($id, $request->except('product_id') +
                [
                    'product_id' => $id,
                ]);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json($e);
        }
        notify()->success('Product Successfully Updated.', 'Updated');
        return redirect()->route('backend.products.index');
    }

    public function destroy($id)
    {
        Gate::authorize('backend.products.destroy');
        $this->productRepo->deleteProduct($id);
        notify()->warning('Product Successfully Deleted.', 'Deleted');
        return redirect()->route('backend.products.index');
    }
}
