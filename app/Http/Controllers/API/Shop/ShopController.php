<?php

namespace App\Http\Controllers\API\Shop;

use App\Models\Shop\Shop;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Repository\Shop\ShopRepository;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\Shop\ShopResource;
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
            'shop_name'           => 'required',
            'shop_no'             => 'required',
            'shop_description'    => 'required',
            'shop_logo'           => 'nullable|mimes:jpeg,jpg,png|max:500',
            'shop_cover_image'    => 'nullable|mimes:jpeg,jpg,png|max:500',
            'meta_og_image_shop'  => 'nullable|mimes:jpeg,jpg,png|max:500',
        ]);

        $shop_logo = $request->hasFile('shop_logo') ? $this->shopRepo->storeFile($request->file('shop_logo')) : null;
        $shop_cover_image = $request->hasFile('shop_cover_image') ? $this->shopRepo->storeFile($request->file('shop_cover_image')) : null;
        $meta_og_image_shop = $request->hasFile('meta_og_image_shop') ? $this->shopRepo->storeFile($request->file('meta_og_image_shop')) : null;

        $shop = $this->shopRepo->create($request->except('shop_logo', 'shop_cover_image', 'meta_og_image_shop', 'shop_owner_id') +
            [
                'shop_owner_id'         => Auth::id(),
                'shop_logo'             => $shop_logo,
                'shop_cover_image'      => $shop_cover_image,
                'meta_og_image_shop'    => $meta_og_image_shop
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
        return view();
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

        $shopLogo = $request->hasFile('shop_logo');
        $shopCoverImage = $request->hasFile('shop_cover_image');
        $metaImageShop = $request->hasFile('meta_og_image_shop');

        $shop_logo = $shopLogo ? $this->shopRepo->storeFile($request->file('shop_logo')) : $shop->shop_logo;
        $shop_cover_image = $shopCoverImage ? $this->shopRepo->storeFile($request->file('shop_cover_image')) : $shop->shop_cover_image;
        $meta_og_image_shop = $metaImageShop ? $this->shopRepo->storeFile($request->file('meta_og_image_shop')) : $shop->meta_og_image_shop;

        if ($shopLogo || $shopCoverImage || $metaImageShop) {
            $this->shopRepo->updateShops($id);
        }

        $this->shopRepo->updateByID($id, $request->except('shop_logo', 'shop_cover_image', 'meta_og_image_shop') +
            [
                'shop_logo' => $shop_logo,
                'shop_cover_image' => $shop_cover_image,
                'meta_og_image_shop' => $meta_og_image_shop
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
        $this->shopRepo->deleteShops($id);;
    }
}
