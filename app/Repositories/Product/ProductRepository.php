<?php

namespace Repository\Product;

use Repository\BaseRepository;
use App\Models\Product\Product;
use App\Models\Product\ProductCategory;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Repository\Shop\ShopRepository;

class ProductRepository extends BaseRepository
{

    public function model()
    {
        return Product::class;
    }

    public function store(int $shopID, array $productData,  int $userID = null): Product
    {
        return $this->model()::create([
            'shop_id' => $shopID,
            'user_id' => $userID,
            'brand_id' => $productData['brand_id'] ?? null,
            'ref' => $productData['ref'] ?? $this->generateUniqueRef($shopID),
            'name' => $productData['title'] ?? null,
            'description' => $productData['description'] ?? null,
            'can_bargain' => $productData['can_bargain'] ?? null,
            'product_type' => $productData['product_type'] ?? null,
            'refund_policy' => $productData['refund_policy'] ?? null,
            'service_policy' => $productData['service_policy'] ?? null,
            'offers' => $productData['offers'] ?? null,
            'tags' => $productData['tags'] ?? null,
            'price' => $productData['price'] ?? null,
            'stocks' => $productData['stocks'] ?? null,
            'vat' => $productData['vat'] ?? null,
            'discount' => $productData['discount'] ?? null,
            'thumbnail' => $productData['thumbnail'] ?? null
        ]);
    }

    public function getAllByShopID($shop_id, $per_page = null)
    {
        $products = $this->model()::where('shop_id', $shop_id);
        if ($products != null)
            return $products->paginate($per_page);

        return $products->get();
    }

    public function getAllByShopByCategory($shop_id, $productId, $per_page = null)
    {
        $products = $this->model()::where('shop_id', $shop_id)->whereIn('id', $productId);
        if ($products != null)
            return $products->paginate($per_page);

        return $products->get();
    }

    public function productSearch($shop_id, $keyword, $per_page = null)
    {
        $products = $this->model()::where('shop_id', $shop_id)->where('name', 'LIKE', '%' . $keyword . '%');
        if ($products != null)
            return $products->paginate($per_page);

        return $products->get();
    }

    public function mainSearchProducts($keyword)
    {
        $products = $this->model()::where('name', 'LIKE', '%' . $keyword . '%');
        return $products->get();
    }

    public function deleteProduct($id)
    {
        $product = $this->findById($id);
        // Storage::delete($product->icon);
        $product->delete();
    }

    public function generateUniqueRef($shopID): string
    {
        $refCode = $this->generateRef($shopID);
        if (!$this->model()::where('ref', $refCode)->first()) {
            return $refCode;
        }
        return $this->generateUniqueRef($shopID);
    }

    private function generateRef($shopID): string
    {
       $shop = (new ShopRepository())->getNameAndCity($shopID);
       $shopCode = substr($shop->name, 0, 1);
       $cityCode = substr(optional($shop->city)->name, 0, 2);
       $marketCode = substr(optional($shop->market)->name, 0, 2);

       return $cityCode . $marketCode . $shopCode . '-' . rand(111111, 999999);
    }

    public function similarProduct($shop_id)
    {
        return $this->model()::where('shop_id', $shop_id)->get();
    }

    public function similarProductByProduct($productId, $shop_id)
    {
        return $this->model()::where('id', $productId)->where('shop_id', $shop_id)->first();
    }
}
