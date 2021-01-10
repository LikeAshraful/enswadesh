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
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManager;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $shops = Shop::all();
        return view('backend.shop.shop.index',  compact('shops'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $cities = City::all();
        $areas = Area::all();
        $thanas = Thana::all();
        $markets = Market::all();
        $floors = Floor::all();
        $shoptypes = ShopType::all();
        return view('backend.shop.shop.form', compact('cities','areas','thanas','markets','floors', 'shoptypes'));
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
            'shop_description'    => 'required',
            'shop_logo'           => 'required|mimes:jpeg,jpg,png|max:500',
            'shop_cover_image'    => 'required|mimes:jpeg,jpg,png|max:500',
            'meta_og_image_shop'  => 'required|mimes:jpeg,jpg,png|max:500',
        ]);

        // for shop logo
        if ($shop_logo = $request->file('shop_logo')) {
            $shopLogo = rand(10, 100) . time() . '.' . $shop_logo->getClientOriginalExtension();
            $locationLogo = public_path('/uploads/shopproperty/shop/' . $shopLogo);
            Image::make($shop_logo)->resize(600, 400)->save($locationLogo);
        }
        // for shop cover image
        if ($shop_cover_image = $request->file('shop_cover_image')) {
            $coverImage = rand(10, 100) . time() . '.' . $shop_cover_image->getClientOriginalExtension();
            $locationCoverImage = public_path('/uploads/shopproperty/shop/' . $coverImage);
            Image::make($shop_cover_image)->resize(600, 400)->save($locationCoverImage);
        }
        // for shop  meta image
        if ($meta_og_image_shop = $request->file('meta_og_image_shop')) {
            $metaImage = rand(10, 100) . time() . '.' . $meta_og_image_shop->getClientOriginalExtension();
            $locationMetaImage = public_path('/uploads/shopproperty/shop/' . $metaImage);
            Image::make($meta_og_image_shop)->resize(600, 400)->save($locationMetaImage);
        }

        $slug = Str::of($request->shop_name)->slug('_');
        Shop::create($request->except('shop_logo', 'shop_cover_image', 'meta_og_image_shop', 'shop_slug') +
            [
                'shop_logo'           => $shopLogo,
                'shop_cover_image'    => $coverImage,
                'meta_og_image_shop'  => $metaImage,
                'shop_slug'           => $slug
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
        $cities = City::all();
        $areas = Area::all();
        $thanas = Thana::all();
        $markets = Market::all();
        $floors = Floor::all();
        $shoptypes = ShopType::all();
        $shop = Shop::find($id);
        return view('backend.shop.shop.form', compact('cities','areas','thanas','markets','floors', 'shoptypes', 'shop'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        $data = Shop::find($id);
        $shop_logo          = $data->shop_logo;
        $shop_cover_image   = $data->shop_cover_image;
        $meta_og_image_shop = $data->meta_og_image_shop;

        if (!empty($request->shop_name)) {
            $slug = Str::of($request->shop_name)->slug('_');
        } else {
            $slug = $data->shop_slug;
        }

        if ($shopLogo = $request->file('shop_logo')) {
            $shop_logo = rand(10, 100) . time() . '.' . $shopLogo->getClientOriginalExtension();
            $locationLogo = public_path('/uploads/shopproperty/shop/' . $shop_logo);
            Image::make($shopLogo)->resize(600, 400)->save($locationLogo);
            $oldFileLogo = $data->shop_logo;
            $data->shop_logo = $shop_logo;
            Storage::delete('/uploads/shopproperty/shop/' . $oldFileLogo);
        }

        if ($coverImage = $request->file('shop_cover_image')) {
            $shop_cover_image = rand(10, 100) . time() . '.' . $coverImage->getClientOriginalExtension();
            $locationCoverImage = public_path('/uploads/shopproperty/shop/' . $shop_cover_image);
            Image::make($coverImage)->resize(600, 400)->save($locationCoverImage);
            $oldFileCoverImage = $data->shop_cover_image;
            $data->shop_cover_image = $shop_cover_image;
            Storage::delete('/uploads/shopproperty/shop/' . $oldFileCoverImage);
        }

        if ($metaImage = $request->file('meta_og_image_shop')) {
            $meta_og_image_shop = rand(10, 100) . time() . '.' . $metaImage->getClientOriginalExtension();
            $locationMetaImage = public_path('/uploads/shopproperty/shop/' . $meta_og_image_shop);
            Image::make($metaImage)->resize(600, 400)->save($locationMetaImage);
            $oldFileMetaImage = $data->meta_og_image_shop;
            $data->meta_og_image_shop = $meta_og_image_shop;
            Storage::delete('/uploads/shopproperty/shop/' . $oldFileMetaImage);
        }

        // shop info update
        $data = $data->update($request->except('shop_logo', 'shop_cover_image', 'meta_og_image_shop', 'shop_slug') +
            [
                'shop_logo'           => $shop_logo,
                'shop_cover_image'    => $shop_cover_image,
                'meta_og_image_shop'  => $meta_og_image_shop,
                'shop_slug'           => $slug
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
        $data = Shop::find($id);
        $oldFilename = $data->shop_icon;
        Storage::delete('/uploads/shopproperty/shop/' . $oldFilename);
        $data->delete();
        return redirect()->route('backend.shop.shops.index');
    }

}
