<?php

namespace Repository\Product\Base;

use Repository\BaseRepository;
use App\Models\Product\ProductUnit;

class UnitRepository extends BaseRepository
{
    public function model()
    {
        return ProductUnit::class;
    }
}