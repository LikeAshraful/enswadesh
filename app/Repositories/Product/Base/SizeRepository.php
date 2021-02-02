<?php

namespace Repository\Product\Base;
use Repository\BaseRepository;
use App\Models\Product\Base\Size;

class SizeRepository extends BaseRepository {

    public function model()
    {
        return Size::class;
    }
}