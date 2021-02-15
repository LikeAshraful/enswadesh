<?php

namespace Repository\Product;
use Repository\BaseRepository;
use App\Models\Product\Product;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class ProductRepository extends BaseRepository {

    public function model()
    {
        return Product::class;
    }

    public function getAllByShopID($shop_id, $per_page = null)
    {
        $products = $this->model()::where('shop_id', $shop_id);
        if($products != null)
           return $products->paginate($per_page);

        return $products->get();
        
    }

    public function deleteProduct($id)
    {
        $product = $this->findById($id);
        Storage::delete($product->icon);
        $product->delete();
    }
}
