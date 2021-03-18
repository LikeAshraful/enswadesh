<?php

namespace App\Http\Controllers\API\Shop;

use App\Models\Shop\Shop;
use Illuminate\Http\Request;
use App\Models\Product\Product;
use Illuminate\Routing\Controller;
use Repository\Shop\ShopRepository;
use Illuminate\Support\Facades\Auth;
use Repository\Shop\ShopMediaRepository;
use App\Http\Resources\Shop\ShopResource;
use App\Http\Controllers\JsonResponseTrait;
use App\Http\Resources\Shop\ShopCollection;
use Illuminate\Contracts\Support\Renderable;

class ShopController extends Controller
{
    use JsonResponseTrait;

    public $shopRepo;

    public function __construct(ShopRepository $shopRepository, ShopMediaRepository $shopMediaRepository)
    {
        $this->shopRepo = $shopRepository;
        $this->shopMediaRepo = $shopMediaRepository;
    }


    public function index()
    {
        $allShops = $this->shopRepo->getAll();
        return $this->json(
            'Shop list',
            ShopResource::collection($allShops)
        );
    }

    public function create()
    {
        return view('shopproperty::create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'           => 'required',
            'shop_no'             => 'required',
            'logo'           => 'nullable|mimes:jpeg,jpg,png|max:5000',
            'cover_image'    => 'nullable|mimes:jpeg,jpg,png|max:5000',
            'meta_og_image'  => 'nullable|mimes:jpeg,jpg,png|max:5000',
        ]);

        $logo = $request->hasFile('logo') ? $this->shopRepo->storeFile($request->file('logo')) : null;
        $cover_image = $request->hasFile('cover_image') ? $this->shopRepo->storeFile($request->file('cover_image')) : null;
        $meta_og_image = $request->hasFile('meta_og_image') ? $this->shopRepo->storeFile($request->file('meta_og_image')) : null;

        $shop = $this->shopRepo->create($request->except('logo', 'cover_image', 'meta_og_image', 'shop_owner_id') +
            [
                'shop_owner_id'         => Auth::id(),
                'logo'             => $logo,
                'cover_image'      => $cover_image,
                'meta_og_image'    => $meta_og_image
            ]);

        return $this->json(
            'Shop created successfully',
            $shop
        );
    }

    public function show($id)
    {
        $shop = $this->shopRepo->findOrFailByID($id);
        return $this->json(
            'Single Shop',
            new ShopResource($shop)
        );
    }

    public function myShops()
    {
        $myShops = $this->shopRepo->getAllByUserID('shop_owner_id', Auth::id());
        return $this->json(
            'My Shop list',
            ShopResource::collection($myShops)
        );
    }

    /**
     * show authenticated user's single shop
     */
    public function myShop($id)
    {

        $myShop = $this->shopRepo->findOrFailByUserID(Auth::id(), $id);

        return $this->json(
            'My Shop',
            new ShopResource($myShop)
        );
    }

    public function edit($id)
    {
        $shop = $this->shopRepo->findOrFailByID($id);
        return $this->json(
            'Shop Edit',
            new ShopResource($shop)
        );
    }

    public function update(Request $request, $id)
    {
        $shop = $this->shopRepo->updateByShopOwner($id);
        if ($shop == null) {
            return $this->bad(
                'You are unauthorized to update this shop!',
                403
            );
        }

        $shopLogo = $request->hasFile('logo');
        $shopCoverImage = $request->hasFile('cover_image');
        $metaImageShop = $request->hasFile('meta_og_image');

        $logo = $shopLogo ? $this->shopRepo->storeFile($request->file('logo')) : $shop->logo;
        $cover_image = $shopCoverImage ? $this->shopRepo->storeFile($request->file('cover_image')) : $shop->cover_image;
        $meta_og_image = $metaImageShop ? $this->shopRepo->storeFile($request->file('meta_og_image')) : $shop->meta_og_image;

        if ($shopLogo) {
            $this->shopRepo->updateShopsLogo($id);
        }

        if ($shopCoverImage) {
            $this->shopRepo->updateShopsImage($id);
        }

        if ($metaImageShop) {
            $this->shopRepo->updateShopsOgImage($id);
        }

        $this->shopRepo->updateByID($id, $request->except('logo', 'cover_image', 'meta_og_image') +
            [
                'logo' => $logo,
                'cover_image' => $cover_image,
                'meta_og_image' => $meta_og_image
            ]);

        //update shop images to shop media table
        $this->shopMediaRepo->shopGalleryUpdate($request->hasFile('image') ? $request->file('image') : $shop->shopMedia, $id);

        return $this->json(
            'Shop updated successfully',
            $shop
        );
    }

    public function removeShopMedia($id)
    {
        $this->shopMediaRepo->deletedByID($id);
        return response()->json([
            'success' => 'Record deleted successfully!'
        ]);
    }

    public function destroy($id)
    {
        $this->shopRepo->deleteShops($id);
        return $this->json(
            'Shop Deleted Successfully'
        );
    }


    public function shopByMarket($id)
    {
        $shops = $this->shopRepo->shopByMarketId($id);
        return $this->json(
            'Shop list',
            ShopResource::collection($shops)->response()->getData(true)
        );
    }

    public function shopByMarketFloor($markeId, $floorId)
    {
        $shops = $this->shopRepo->shopByMarketFloor($markeId, $floorId);
        return $this->json(
            'Shop list',
            ShopResource::collection($shops)->response()->getData(true)
        );
    }

    public function getShopCountByMarketFloor($id)
    {
        $shops = $this->shopRepo->getShopCountByMarketFloor($id);
        return $this->json(
            'Shop count list by floor',
            $shops
        );
    }

    public function checkApproveShop($id)
    {
        $shop = $this->shopRepo->checkApproveShop(Auth::id(), $id);
        return $this->json(
            'Pending shop',
            new ShopResource($shop)
        );
    }

    public function searchShopByMarket(Request $request)
    {
        $shops = $this->shopRepo->searchShopByMarket($request->params['id'], $request->params['keyword'], $request->params['floorId']);
        return $this->json(
            'Search Shop list',
            ShopResource::collection($shops)->response()->getData(true)
        );
    }
}
