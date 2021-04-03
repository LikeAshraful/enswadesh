<?php

namespace App\Http\Controllers\API\Wishlist;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\JsonResponseTrait;
use Repository\Wishlist\WishlistRepository;

class WishlistController extends Controller
{
    use JsonResponseTrait;

    public $wishlistRepo;

    public function __construct(WishlistRepository $wishlistRepository)
    {
        $this->wishlistRepo    =   $wishlistRepository;
    }

    public function index()
    {
        $wishlists = $this->wishlistRepo->getWishlists();
        return $this->json('Wishlist',
            $wishlists
        );
    }

    public function sentWishlistRequest($product_id)
    {
        $wishProduct = $this->wishlistRepo->createWishlist($product_id, Auth::id());
        return $this->json('Wishlist request sent', $wishProduct);
    }

    public function checkWishList($productID)
    {
        $check = $this->wishlistRepo->checkWishList($productID);

         return $this->json('Wishlist Check', $check);
    }

    public function destroy($id)
    {
        $wishlist   = $this->wishlistRepo->deleteByID($id);
        $message    =" Wishlist Deleted!";
        return $this->json($message, $wishlist);
    }
}