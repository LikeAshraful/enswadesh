<?php

namespace Repository\Product\Base;

use Repository\BaseRepository;
use App\Models\Product\Base\Color;

class ColorRepository extends BaseRepository
{
    function model()
    {
        return Color::class;
    }
}
