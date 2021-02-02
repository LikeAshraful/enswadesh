<?php

namespace App\Http\Controllers\API\Interaction;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\JsonResponseTrait;
use Repository\Interaction\ShareRepository;
use App\Http\Resources\Interaction\ShareResource;

class ShareController extends Controller
{
    use JsonResponseTrait;

    public $shareRepo;

    public function __construct(ShareRepository $shareRepository)
    {
        $this->shareRepo = $shareRepository;
    }

    public function getShares($interaction_id)
    {
        $shares = $this->shareRepo->getSharessByInteractionID($interaction_id);

        return $this->json(
            'Shares',
            ShareResource::collection($shares)
        );
    }

    public function store(Request $request)
    {
        $share = $this->shareRepo->create($request->except(['user_id']) + [
            'user_id' => Auth::id()
        ]);

        return $this->json(
            "Shared",
            $share
        );
    }


}
