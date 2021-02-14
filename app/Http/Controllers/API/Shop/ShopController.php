<?php

namespace App\Http\Controllers\API\Shop;

use App\Models\Shop\Shop;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Repository\Shop\ShopRepository;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\Shop\ShopResource;
use App\Http\Resources\Shop\ShopCollection;
use App\Http\Controllers\JsonResponseTrait;
use Illuminate\Contracts\Support\Renderable;

class ShopController extends Controller
{
    use JsonResponseTrait;

    public $shopRepo;

    public function __construct(ShopRepository $shopRepository)
    {
        $this->shopRepo = $shopRepository;
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $allShops = $this->shopRepo->getAll();
        return $this->json(
            'Shop list',
            ShopResource::collection($allShops)
        );
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('shopproperty::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
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

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $shop = $this->shopRepo->findOrFailByID($id);
        return $this->json(
            'Single Shop',
            $shop
        );
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function myShop()
    {
        $myShops = $this->shopRepo->getAllByUserID('shop_owner_id', Auth::id());
        return $this->json(
            'My Shop list',
            ShopResource::collection($myShops)
        );
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $shop = $this->shopRepo->findOrFailByID($id);
        return $this->json(
            'Shop Edit',
            new ShopResource($shop)
        );
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
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

        return $this->json(
            'Shop updated successfully',
            $shop
        );
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $this->shopRepo->deleteShops($id);
    }


    public function shopByMarket($id)
    {
        $shops = $this->shopRepo->shopByMarketId($id);
        return $this->json('shoplist',$shops);
        // return $this->json(
        //     'Shop list by Market ID',
        //     new ShopCollection($shops)
        // );
    }

    public function shopByMarketByFloor($id)
    {
        $shops = $this->shopRepo->shopByMarketByFloorNo($id);
        return $this->json(
            'Shop count list by floor',
            $shops
        );
    }
}
