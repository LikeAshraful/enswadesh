<?php

namespace App\Http\Controllers\Backend\Shop;

use Image;
use Storage;
use App\Models\Shop\Shop;
use Illuminate\Http\Request;
use App\Models\Shop\ShopType;
use Repository\Shop\ShopRepository;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Repository\Location\AreaRepository;
use Repository\Location\CityRepository;
use Repository\Shop\ShopTypeRepository;
use Repository\Shop\ShopMediaRepository;
use Repository\Location\MarketRepository;
use App\Http\Controllers\JsonResponseTrait;
use App\Http\Requests\Shop\StoreShopRequest;
use App\Http\Requests\Shop\UpdateShopRequest;

class ShopController extends Controller
{
    use JsonResponseTrait;

    public $cityRepo;
    public $areaRepo;
    public $marketRepo;
    public $shopTypeRepo;
    public $shopRepo;
    public $shopMediaRepo;

    public function __construct(
        CityRepository $cityRepository,
        AreaRepository $areaRepository,
        MarketRepository $marketRepository,
        ShopTypeRepository $shopTypeRepository,
        ShopRepository $shopRepository,
        ShopMediaRepository $shopMediaRepository
    ) {
        $this->cityRepo     = $cityRepository;
        $this->areaRepo     = $areaRepository;
        $this->marketRepo   = $marketRepository;
        $this->shopTypeRepo = $shopTypeRepository;
        $this->shopRepo     = $shopRepository;
        $this->shopMediaRepo = $shopMediaRepository;
    }

    public function index()
    {
        Gate::authorize('backend.shops.index');
        $shops = $this->shopRepo->getAll();
        return view('backend.shop.shop.index',  compact('shops'));
    }

    public function create()
    {
        Gate::authorize('backend.shops.create');
        $cities = $this->cityRepo->getAll();
        $areas = $this->areaRepo->getAll();
        $markets = $this->marketRepo->getAll();
        $shoptypes = ShopType::all();
        return view('backend.shop.shop.form', compact('cities', 'areas', 'markets', 'shoptypes'));
    }

    public function store(StoreShopRequest $request)
    {
        $logo = $request->hasFile('logo') ? $this->shopRepo->storeFile($request->file('logo')) : null;
        $cover_image = $request->hasFile('cover_image') ? $this->shopRepo->storeFile($request->file('cover_image')) : null;
        $meta_og_image = $request->hasFile('meta_og_image') ? $this->shopRepo->storeFile($request->file('meta_og_image')) : null;

        $shop = $this->shopRepo->create($request->except('logo', 'cover_image', 'meta_og_image', 'shop_owner_id') +
            [
                'shop_owner_id'    => Auth::id(),
                'logo'             => $logo,
                'cover_image'      => $cover_image,
                'meta_og_image'    => $meta_og_image
            ]);

        $this->shopMediaRepo->shopGallery($request->hasFile('image') ? $request->file('image') : null, $shop->id);
        notify()->success('shop Successfully Added.', 'Added');
        return redirect()->route('backend.shops.index');
    }

    public function show($id)
    {
        return view('show');
    }

    public function edit($id)
    {
        Gate::authorize('backend.shops.edit');
        $cities     = $this->cityRepo->getAll();
        $areas      = $this->areaRepo->getAll();
        $markets    = $this->marketRepo->getAll();
        $shoptypes  = ShopType::all();
        $shop       = Shop::find($id);
        return view('backend.shop.shop.form', compact('cities', 'areas', 'markets', 'shoptypes', 'shop'));
    }

    public function update(UpdateShopRequest $request, $id)
    {
        $shop = $this->shopRepo->updateByShopOwner($id);
        if ($shop == null) {
            return $this->bad(
                'You are unauthorized to update this shop!',
                403
            );
        }
        $shopLogo       = $request->hasFile('logo');
        $shopCoverImage = $request->hasFile('cover_image');
        $metaImageShop  = $request->hasFile('meta_og_image');

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
        $this->shopMediaRepo->shopGalleryUpdate($request->hasFile('image') ? $request->file('image') : $shop->shopMedia, $id);
        notify()->success('Shop Successfully Updated.', 'Updated');
        return redirect()->route('backend.shops.index');
    }

    public function destroy($id)
    {
        Gate::authorize('backend.shops.destroy');
        $this->shopRepo->deleteShops($id);
        notify()->success('Shop Successfully Deleted.', 'Deleted');
        return redirect()->route('backend.shops.index');
    }

    public function removeShopMedia($id)
    {
        $this->shopMediaRepo->deletedByID($id);
        return response()->json([
            'success' => 'Record deleted successfully!'
        ]);
    }
}
