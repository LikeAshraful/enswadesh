<?php

namespace Repository\Product;
use Repository\BaseRepository;
use App\Models\Product\ProductCategory;

class ProductCategoryRepository extends BaseRepository {

    public function model()
    {
        return ProductCategory::class;
    }
}
