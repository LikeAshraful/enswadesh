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

    public function updateProductMediaById($id)
    {
        return $this->model()::where('product_id', $id)->first();
    }

    public function updateProductMedia($id)
    {
        $productMedia = $this->model()::where('product_id', $id)->first();
        Storage::delete($productMedia->src);
    }

    public function productMediaUpdateByID($id, array $modelData)
    {
        $productMedia = $this->model()::where('product_id', $id)->first();
        return $productMedia->update($modelData);
    }
}
