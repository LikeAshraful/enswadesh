<?php

namespace Repository\Product;

use App\Models\Product\Flashsale;
use PhpParser\ErrorHandler\Collecting;
use Repository\BaseRepository;

class FlashSaleRepository extends BaseRepository
{

    public function model()
    {
        return Flashsale::class;
    }

    public function getAllProducts()
    {
        $current_date = date("Y-m-d");
        $current_time = date("h:i:s");
        return $this->model()::whereDate('start_date', '<=', $current_date)->whereDate('end_date', '>=', $current_date)->orWhereTime('start_time','<=', $current_time)->orWhereTime('end_time', '>=', $current_time )->get();
    }

}
