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

    public function create()
    {

    }

    public function store(Request $request)
    {

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