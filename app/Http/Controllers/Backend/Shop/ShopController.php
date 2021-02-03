<?php

namespace App\Http\Controllers\Backend\Shop;

use Image;
use Storage;
use App\Models\Shop\Shop;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Location\Area;
use App\Models\Location\City;
use App\Models\Shop\ShopType;
use App\Models\Location\Floor;
use App\Models\Location\Thana;
use App\Models\Location\Market;
use Repository\Shop\ShopRepository;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManager;
use Repository\Location\AreaRepository;
use Repository\Location\CityRepository;
use Repository\Shop\ShopTypeRepository;
use Repository\Location\MarketRepository;
use App\Http\Controllers\JsonResponseTrait;

class ShopController extends Controller
{
    use JsonResponseTrait;

    public $cityRepo;
    public $areaRepo;
    public $marketRepo;
    public $shopTypeRepo;
    public $shopRepo;

    public function __construct(CityRepository $cityRepository, AreaRepository $areaRepository, MarketRepository $marketRepository, ShopTypeRepository $shopTypeRepository, ShopRepository $shopRepository)
    {
        $this->cityRepo = $cityRepository;
        $this->areaRepo = $areaRepository;
        $this->marketRepo = $marketRepository;
        $this->shopTypeRepo = $shopTypeRepository;
        $this->shopRepo = $shopRepository;
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $shops = $this->shopRepo->getAll();
        return view('backend.shop.shop.index',  compact('shops'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $cities = $this->cityRepo->getAll();
        $areas = $this->areaRepo->getAll();
        $markets = $this->marketRepo->getAll();
        $shoptypes = ShopType::all();
        return view('backend.shop.shop.form', compact('cities','areas' ,'markets', 'shoptypes'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'shop_name'           => 'required',
            'shop_no'             => 'required',
            'shop_logo'           => 'nullable|mimes:jpeg,jpg,png|max:5000',
            'shop_cover_image'    => 'nullable|mimes:jpeg,jpg,png|max:5000',
            'meta_og_image_shop'  => 'nullable|mimes:jpeg,jpg,png|max:5000',
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

        notify()->success('shop Successfully Added.', 'Added');
        return redirect()->route('backend.shops.index');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $cities = $this->cityRepo->getAll();
        $areas = $this->areaRepo->getAll();
        $markets = $this->marketRepo->getAll();
        $shoptypes = ShopType::all();
        $shop = Shop::find($id);
        return view('backend.shop.shop.form', compact('cities','areas', 'markets', 'shoptypes', 'shop'));
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

        if ($shopLogo) {
            $this->shopRepo->updateShopsLogo($id);
        }

        if ($shopCoverImage) {
            $this->shopRepo->updateShopsImage($id);
        }

        if ($metaImageShop) {
            $this->shopRepo->updateShopsOgImage($id);
        }

        $this->shopRepo->updateByID($id, $request->except('shop_logo', 'shop_cover_image', 'meta_og_image_shop') +
            [
                'shop_logo' => $shop_logo,
                'shop_cover_image' => $shop_cover_image,
                'meta_og_image_shop' => $meta_og_image_shop
            ]);

        notify()->success('Shop Successfully Updated.', 'Updated');
        return redirect()->route('backend.shops.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $this->shopRepo->deleteShops($id);
        notify()->warning('Shop Successfully Deleted.', 'Deleted');
        return redirect()->route('backend.shop.shops.index');
    }

}
