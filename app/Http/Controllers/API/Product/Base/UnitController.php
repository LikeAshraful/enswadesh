<?php

namespace App\Http\Controllers\API\Product\Base;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\JsonResponseTrait;
use Repository\Product\Base\UnitRepository;
use App\Http\Resources\Product\Base\UnitResource;

class UnitController extends Controller
{
    use JsonResponseTrait;

    public $unitRepo;

    public function __construct(UnitRepository $unitRepository)
    {
        $this->unitRepo = $unitRepository;
    }

    public function index()
    {
        $units = $this->unitRepo->getAll();
        return $this->json('Unit list', UnitResource::collection($units));
    }

}