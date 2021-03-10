<?php

namespace App\Http\Controllers\API\Product;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Repository\Product\ProductRepository;
use App\Http\Controllers\JsonResponseTrait;
use Repository\Product\ProductMediaRepository;
use App\Http\Resources\Product\ProductResource;
use Repository\Product\ProductCategoryRepository;

class ProductController extends Controller
{
    use JsonResponseTrait;

    public $productRepo;
    public $proMediaRepo;
    public $proCategoryRepo;
    public function __construct(ProductRepository $productRepository,  ProductMediaRepository $productMediaRepository, ProductCategoryRepository $productCategoryRepository)
    {
        $this->productRepo = $productRepository;
        $this->proMediaRepo = $productMediaRepository;
        $this->proCategoryRepo = $productCategoryRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = $this->productRepo->getAll();

        return $this->json(
            "Product List",
            ProductResource::collection($products)
        );
    }

    public function productsByShop($shop_id)
    {
        $products = $this->productRepo->getAllByShopID($shop_id, 4);
        return $this->json('Product List', ProductResource::collection($products)->response()->getData(true));
    }

    public function productsByShopByCategory($shop_id, $cate_id)
    {
        $productId = $this->proCategoryRepo->productIdByCategoryId($cate_id);
        $products = $this->productRepo->getAllByShopByCategory($shop_id, $productId, 4);
        return $this->json('Product List', ProductResource::collection($products)->response()->getData(true));
    }

    public function searchProducts(Request $request)
    {
        $products = $this->productRepo->productSearch($request->params['id'], $request->params['keyword'], 4);
        return $this->json('Products By Search List', ProductResource::collection($products)->response()->getData(true));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
                    'user_id' => Auth::id()
                ]);

            //product media store
            $this->proMediaRepo->create($request->except('src', 'product_id', 'image') +
                [
                    'src' => $request->hasFile('src') ? $this->proMediaRepo->storeFile($request->file('src')) : null,
                    'product_id' => $product->id,
                    'type' => 'image'
                ]);

            //product category store
            $this->proCategoryRepo->create($request->except('product_id') +
                [
                    'product_id' => $product->id,
                ]);

            DB::commit();
        } catch (\Exception $e) {

            DB::rollback();
            return $this->json('something wrong', $e);
        }

        return $this->json(
            "Product Created Sucessfully",
            $product
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = $this->productRepo->findOrFailByID($id);
        return $this->json(
            'Single Product',
            $product
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
            $product = $this->productRepo->updateByID($id, $request->except('user_id') +
                [
                    'user_id' => Auth::id()
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
            //catetory update updateProductCategoryById
            $this->proCategoryRepo->updateProductCategoryById($id, $request->except('product_id') +
                [
                    'product_id' => $id,
                ]);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json($e);
        }
        return $this->json(
            "Product Updated Sucessfully",
            $product
        );
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
        return $this->json(
            "Product Deleted Sucessfully",
        );
    }
}
