<?php

namespace App\Http\Controllers\API\Product;

use App\Http\Requests\Api\Product\ProductStoreRequesst;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Repository\Product\ProductAttributeRepository;
use Repository\Product\ProductRepository;
use App\Http\Controllers\JsonResponseTrait;
use Repository\Product\ProductMediaRepository;
use App\Http\Resources\Product\ProductResource;
use Repository\Product\ProductCategoryRepository;

class ProductController extends Controller
{
    use JsonResponseTrait;

    public $productRepo;
    public $productMediaRepo;
    public $proCategoryRepo;
    public function __construct(ProductRepository $productRepository,  ProductMediaRepository $productMediaRepository, ProductCategoryRepository $productCategoryRepository)
    {
        $this->productRepo = $productRepository;
        $this->productMediaRepo = $productMediaRepository;
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
     */
    public function store(ProductStoreRequesst $request)
    {
        $product = DB::transaction(function() use ($request) {
            if ($request->fileHas('thumbnail')) {
                $thumbnail = $this->productMediaRepo->storeFile($request->file('thumbnail'));
                $request->request->add(['thumbnail_id' => $thumbnail->id]);
            }

            $product = $this->productRepo->store(
                $request->shop_id,
                $request->except('thumbnail', 'images', 'sizes', 'weights', 'features'),
                1
            );

            if ($request->images && sizeof($request->images) > 0) {
                $this->productMediaRepo->storeFile($product, $this->images);
            }

            if ($request->has('sizes') && sizeof($request->sizes) > 0) {
                ProductAttributeRepository::storeSizes($product, $request->sizes);
            }

            if ($request->has('weights') && sizeof($request->weights) > 0) {
                ProductAttributeRepository::storeWeights($product, $request->weights);
            }

            if ($request->has('features') && sizeof($request->features) > 0) {
                ProductAttributeRepository::storeFeatures($product, $request->features);
            }

            return $product;
        });

        return $this->json("Product create successfully", $product);
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
            new ProductResource($product)
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
            $productMedida = $this->productMediaRepo->updateProductMediaById($id);
            $srcImage = $request->hasFile('src');
            $src = $srcImage ? $this->productMediaRepo->storeFile($request->file('src')) : $productMedida->src;
            if ($srcImage) {
                $this->productMediaRepo->updateProductMedia($id);
            }
            $this->productMediaRepo->productMediaUpdateByID($id, $request->except('src', 'product_id', 'type') +
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
