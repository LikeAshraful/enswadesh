<?php

namespace Repository\Product;
use Repository\BaseRepository;
use App\Models\Product\Product;

class SizeRepository extends BaseRepository {

    public function model()
    {
        return Product::class;
    }
}
