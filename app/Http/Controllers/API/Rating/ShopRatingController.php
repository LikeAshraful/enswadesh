<?php

namespace App\Http\Controllers\API\Rating;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\JsonResponseTrait;
use Repository\Rating\ShopRatingRepository;

class ShopRatingController extends Controller
{
    use JsonResponseTrait;

    public $shopRatingRepo;

    public function __construct(ShopRatingRepository $shopRatingRepository)
    {
        $this->shopRatingRepo    =   $shopRatingRepository;
    }

    public function sentShopRating(Request $request)
    {
        $user = $this->shopRatingRepo->create($request->all() + [
                'user_id'      =>  Auth::id()
            ]);

        return $this->json('Subscribe request sent', $user);
    }

    public function countRatingByShopID($shopId)
    {
        $count = $this->shopRatingRepo->getAverageRatingByShopID($shopId);
         return $this->json('Rating Count', $count);
    }

}
