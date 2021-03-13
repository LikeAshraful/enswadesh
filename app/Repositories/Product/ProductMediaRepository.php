<?php

namespace Repository\Product;
use App\Models\Product\Product;
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
        return Storage::put('products/thumbnail', $file);
    }

    public function storeImages(Product $product, array $images)
    {
        if (sizeof($images) == 0) return;
        return $this->model()::insert(array_map(function($image) use ($product) {
            return [
                'src' => $this->storeFile($image),
                'product_id' => $product->id,
                'type' => 'image'
            ];
        }, $this->images));
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
