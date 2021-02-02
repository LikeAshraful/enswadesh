<?php

namespace App\Http\Controllers\API\Product\Base;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\JsonResponseTrait;
use Repository\Product\Base\SizeRepository;
use App\Http\Resources\Product\Base\SizeResource;

class SizeController extends Controller
{
    use JsonResponseTrait;

    public $sizeRepo;

    public function __construct(SizeRepository $sizeRepository)
    {
        $this->sizeRepo = $sizeRepository;
    }

    public function index()
    {
        $sizes = $this->sizeRepo->getAll();

        return $this->json(
            "Size List",
            SizeResource::collection($sizes)
        );
    }

}