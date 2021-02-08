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

    public function deleteProduct($id)
    {
        $product = $this->findById($id);
        Storage::delete($product->icon);
        $product->delete();
    }
}
