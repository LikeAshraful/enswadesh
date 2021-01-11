<?php


namespace Repository\Shop;


use App\Models\Shop\ShopType;
use Repository\BaseRepository;

class ShopTypeRepository extends BaseRepository
{

    function model()
    {
        return ShopType::class;
    }
}