<?php

namespace Repository\Product;
use Repository\BaseRepository;
use App\Models\Product\ProductCategory;

class ProductCategoryRepository extends BaseRepository {

    public function model()
    {
        return ProductCategory::class;
    }

    public function updateProductCategoryById($id, array $modelData)
    {
        $productCategory = $this->model()::where('product_id', $id)->first();
        if($productCategory != null){
            return $productCategory->update($modelData);
        }else {
            return $this->model()::create($modelData);
        }
    }
}
