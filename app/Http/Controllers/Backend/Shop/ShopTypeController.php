<?php

namespace App\Http\Controllers\Backend\Shop;

use Image;
use Storage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Shop\ShopType;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManager;

class ShopTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $shoptypes  = ShopType::all();
        return view('backend.shop.shoptype.index',  compact('shoptypes'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('backend.shop.shoptype.form');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $request->validate([
            'shop_type_name' => 'required'
        ]);
        $slug = Str::of($request->shop_type_name)->slug('_');
        ShopType::create($request->except('shop_type_slug') +
            [
                'shop_type_slug' => $slug
            ]);

        notify()->success('Shop type Successfully Added.', 'Added');
        return redirect()->route('backend.shoptypes.index');
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
        $shoptype= ShopType::find($id);
        return view('backend.shop.shoptype.form', compact('shoptype'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        $data = ShopType::find($id);
        if (!empty($request->shop_type_name)) {
            $slug = Str::of($request->shop_type_name)->slug('_');
        } else {
            $slug = $data->shop_type_slug;
        }


        // shop info update
        $data = $data->update($request->except('shop_type_slug') +
            [
                'shop_type_slug' => $slug
            ]);

        notify()->success('Shop type Successfully Updated.', 'Updated');
        return redirect()->route('backend.shoptypes.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $data = ShopType::find($id);
        $data->delete();
        return redirect()->route('backend.shoptypes.index');
    }
}