<?php


namespace Repository\Product\Base;


use Repository\BaseRepository;
use App\Models\Product\Base\Weight;

class WeightRepository extends BaseRepository
{

    function model()
    {
        return Weight::class;
    }
}
