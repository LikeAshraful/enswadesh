<?php

namespace Repository\Product;
use Repository\BaseRepository;
use Illuminate\Http\UploadedFile;
use App\Models\Product\ProductMedia;
use Illuminate\Support\Facades\Storage;

class ProductMediaRepository extends BaseRepository {

    public function model()
    {
        return ProductMedia::class;
    }

    public function storeFile(UploadedFile $file)
    {
        return Storage::put('fileuploads/products', $file);
    }

    public function updateProductMedial($id)
    {
        $product = $this->findById($id);
        Storage::delete($product->icon);
    }

    public function deleteProductMedial($id)
    {
        $product = $this->findById($id);
        Storage::delete($product->icon);
        $product->delete();
    }
}
