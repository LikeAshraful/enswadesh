<?php

namespace Repository\Rating;

use Repository\BaseRepository;
use App\Models\Rating\ShopRating;

class ShopRatingRepository extends BaseRepository
{
    public function model()
    {
        return ShopRating::class;
    }

    public function getCountByShop($shopId)
    {
        $rating = $this->model()::where('shop_id', $shopId)->get();
        return $rating->count();
    }

    public function getAverageRatingByShopID($shopId)
    {
        $shops = $this->model()::where('id', $shopId)->sum('rate');
        return $shops;
    }
}
