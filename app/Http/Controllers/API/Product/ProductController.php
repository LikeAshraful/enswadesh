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
use App\Http\Resources\Rating\ProductRatingResource;
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


    public function create()
    {
        //
    }


    public function store(ProductStoreRequesst $request)
    {
        if ($request->hasFile('thumbnail')) {
            $request->thumbnail = $this->productMediaRepo->storeFile('products/thumbnail', $request->file('thumbnail'));
        }

        $product = DB::transaction(function () use ($request) {
            $product = $this->productRepo->store(
                $request->shop_id,
                $request->thumbnail,
                $request->except('images', 'sizes', 'weights', 'features'),
                Auth::id()
            );

            $this->proCategoryRepo->create($request->except('product_id') +
                [
                    'product_id' => $product->id,
                ]);

            if ($request->hasFile('audio')) {
                $this->productMediaRepo->storeAudio($product, $request->audio);
            }

            if ($request->images && sizeof($request->images) > 0) {
                $this->productMediaRepo->storeImages($product, $request->images);
            }

            if ($request->has('sizes') && sizeof($request->sizes) > 0 && $request->sizes[0]['size'] != null) {
                ProductAttributeRepository::storeSizes($product, $request->sizes);
            }

            if ($request->has('weights') && sizeof($request->weights) > 0 && $request->weights[0]['weight'] != null) {
                ProductAttributeRepository::storeWeights($product, $request->weights);
            }

            if ($request->has('features') && sizeof($request->features) > 0) {
                ProductAttributeRepository::storeFeatures($product, $request->features);
            }

            return $product;
        });

        return $this->json("Product create successfully", $product);
    }


    public function show($id)
    {
        $product = $this->productRepo->findOrFailByID($id);

        return $this->json(
            'Single Product',
            new ProductResource($product)
        );
    }

    public function edit($id)
    {
        $product = $this->productRepo->findOrFailByID($id);

        return $this->json(
            'Single Product',
            new ProductResource($product)
        );
    }

    public function productImageGalleryRemove($id)
    {
        $this->productMediaRepo->deletedByID($id);
        return response()->json("Product Image Deleted from Gallery");
    }

    public function update(Request $request, $id)
    {
        return $request;
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
            $src = $srcImage ? $this->productMediaRepo->storeFile('products/thumbnail', $request->file('src')) : $productMedida->src;
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

    public function similarProduct($shopId)
    {
        $products = $this->productRepo->similarProduct($shopId);
        return $this->json('Similar Products List', ProductResource::collection($products)->response()->getData(true));
    }

    public function similarProductByProduct($productId, $shopId)
    {
        $product = $this->productRepo->similarProductByProduct($productId, $shopId);
        return $this->json(
            'Similar Product Show',
            new ProductResource($product)
        );
    }

    public function storeProductRating(Request $request)
    {
        $productRating = $this->productRepo->storeProductRating($request->all());

        return $this->json('Product rating',$productRating);
    }

    public function getRatingAndReview($productId)
    {
        $getRatingAndReview = $this->productRepo->getRatingAndReview($productId);
        return $this->json('Rating and Review List', ProductRatingResource::collection($getRatingAndReview)->response()->getData(true));
    }

    public function destroy($id)
    {
        $this->productRepo->deleteProduct($id);
        return $this->json(
            "Product Deleted Sucessfully",
        );
    }
}
