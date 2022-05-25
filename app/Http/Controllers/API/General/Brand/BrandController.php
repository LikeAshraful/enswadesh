<?php

namespace App\Http\Controllers\API\General\Brand;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Repository\Brand\BrandRepository;
use App\Http\Controllers\JsonResponseTrait;
use App\Http\Resources\General\Brand\BrandResource;

class BrandController extends Controller
{
    use JsonResponseTrait;

    public $brandRepo;

    public function __construct(BrandRepository $brandRepository)
    {
        $this->brandRepo = $brandRepository;
    }

    public function index()
    {
        $allBrands = $this->brandRepo->getAll();
        return $this->json(
            'Brand list',
            BrandResource::collection($allBrands)
        );
    }

    public function store(Request $request)
    {
        $icon = $request->hasFile('icon') ? $this->brandRepo->storeFile($request->file('icon')) : null;
        $brand = $this->brandRepo->create($request->except('icon') + [
            'icon' => $icon
        ]);
        return $this->json('Brand create successfully.', [
            'brand' => $brand
        ]);
    }

    public function show($id)
    {

    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }
}