<?php

namespace App\Http\Controllers\API\General;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Repository\General\TutorialRepository;
use App\Http\Controllers\JsonResponseTrait;
use App\Http\Resources\General\TutorialResource;

class TutorialController extends Controller
{
    use JsonResponseTrait;

    protected $tutorialRepo;

    public function __construct(TutorialRepository $tutorialRepository)
    {
        $this->tutorialRepo = $tutorialRepository;
    }

    public function index()
    {
        $tutorials = $this->tutorialRepo->getAll();
        return $this->json(
            'Tutorial list',
            TutorialResource::collection($tutorials)
        );
    }
}
