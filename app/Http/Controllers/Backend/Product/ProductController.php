<?php

namespace App\Http\Controllers\Backend\Product;

use Illuminate\Http\Request;
use App\Models\Product\Product;
use Illuminate\Support\Facades\DB;
use Repository\Shop\ShopRepository;
use App\Http\Controllers\Controller;
use App\Models\Product\ProductMedia;
use Illuminate\Support\Facades\Auth;
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
    public $proCaregoryRepo;
    public $proMediaRepo;
    public $productRepo;

    public function __construct(ShopRepository $shopRepository, CategoryRepository $categoryRepository, BrandRepository $brandRepository, ProductCategoryRepository $productCategoryRepository, ProductMediaRepository $productMediaRepository, ProductRepository $productRepository)
    {
        $this->shopRepo = $shopRepository;
        $this->categoryRepo = $categoryRepository;
        $this->brandRepo = $brandRepository;
        $this->proCaregoryRepo = $productCategoryRepository;
        $this->proMediaRepo = $productMediaRepository;
        $this->productRepo = $productRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = $this->productRepo->getAll();
        return view('backend.product.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $shops = $this->shopRepo->getAll();
        $categories = $this->categoryRepo->getAll();
        $brands = $this->brandRepo->getAll();
        return view('backend.product.product.form', compact('shops', 'categories', 'brands'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

            $this->proCaregoryRepo->create($request->except('product_id') +
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



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::with('category')->find($id);
        $shops = $this->shopRepo->getAll();
        $categories = $this->categoryRepo->getAll();
        $brands = $this->brandRepo->getAll();
        return view('backend.product.product.form', compact('product', 'shops', 'categories', 'brands'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::beginTransaction();
            try {
                //product update
            $this->productRepo->updateByID($id, $request->except('user_id') +
                [
                    'user_id'         => Auth::id()
                ]);
            //product media update
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
            // catetory update
            $this->proCaregoryRepo->updateProductCategoryById($id, $request->except('product_id') +
                [
                    'product_id' => $id,
                ]);

            notify()->success('Product Successfully Updated.', 'Updated');
            return redirect()->route('backend.products.index');
            DB::commit();

        } catch (\Exception $e) {
            DB::rollback();
            return response()->json($e);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->productRepo->deleteProduct($id);
        notify()->warning('Product Successfully Deleted.', 'Deleted');
        return redirect()->route('backend.products.index');
    }
}
