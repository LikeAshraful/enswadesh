<?php

namespace App\Http\Controllers\Backend\Product;

use Illuminate\Http\Request;
use App\Models\Product\Product;
use Repository\Shop\ShopRepository;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Repository\Brand\BrandRepository;
use Repository\Product\ProductRepository;

class ProductController extends Controller
{
    public $shopRepo;
    public $brandRepo;
    public $productRepo;

    public function __construct(ShopRepository $shopRepository, BrandRepository $brandRepository, ProductRepository $productRepository)
    {
        $this->shopRepo = $shopRepository;
        $this->brandRepo = $brandRepository;
        $this->productRepo = $productRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = $this->productRepo->getAll();
        return view('backend.product.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $shops = $this->shopRepo->getAll();
        $brands = $this->brandRepo->getAll();
        return view('backend.product.product.form', compact('shops', 'brands'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'           => 'required',
            'shop_id'        => 'required'
        ]);

        $this->productRepo->create($request->except('user_id') +
            [
                'user_id'         => Auth::id()
            ]);

        notify()->success('Product Successfully Added.', 'Added');
        return redirect()->route('backend.products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $shops = $this->shopRepo->getAll();
        $brands = $this->brandRepo->getAll();
        return view('backend.product.product.form', compact('product', 'shops', 'brands'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->productRepo->updateByID($id, $request->except('user_id') +
            [
                'user_id'         => Auth::id()
            ]);

        notify()->success('Product Successfully Updated.', 'Updated');
        return redirect()->route('backend.products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->productRepo->deletedByID($id);
        notify()->warning('Product Successfully Deleted.', 'Deleted');
        return redirect()->route('backend.products.index');
    }
}
