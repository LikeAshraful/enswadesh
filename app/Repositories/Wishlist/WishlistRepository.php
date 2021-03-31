<?php

namespace Repository\Wishlist;

use Repository\BaseRepository;
use App\Models\Wishlist\Wishlist;
use Illuminate\Support\Facades\Auth;

class WishlistRepository extends BaseRepository
{
    public function model()
    {
        return Wishlist::class;
    }

    public function getWishlists()
    {
        return $this->model()::with('productOfWishlist')->where('user_id', auth()->user()->id)->get();
    }

    public function deleteByID($id)
    {
        $wishlist = $this->model()::where('user_id', Auth::id())->where('user_id', $id)->first();
        $wishlist->delete();
    }

    public function createWishlist($product_id, $user_id)
    {
        $wish = new Wishlist();
        $wish->product_id = $product_id;
        $wish->user_id = $user_id;
        $wish->save();
        return $wish;
    }

    public function checkWishList($productId)
    {
        return $this->model()::where('user_id', auth()->user()->id)->where('product_id', $productId)->first();
    }
}
