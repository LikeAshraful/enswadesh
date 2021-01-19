<?php

namespace App\Http\Controllers\API\General\Interaction;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\JsonResponseTrait;
use Repository\General\InteractionRepository;
use App\Http\Resources\General\Interaction\InteractionResource;

class InteractionController extends Controller
{
    use JsonResponseTrait;

    public $interactionRepo;

    public function __construct(InteractionRepository $interactionRepository)
    {
        $this->interactionRepo = $interactionRepository;
    }

    public function videos()
    {
        $videos = $this->interactionRepo->getInteractionByCategoryID(1);

        return $this->json(
            'Video List',
            InteractionResource::collection($videos)
        );
    }

    public function videoStore(Request $request)
    {
        $image = $request->hasFile('thumbnail') ? $this->interactionRepo->storeFile($request->file('thumbnail'), 'video') : null;

        $video = $this->interactionRepo->create($request->except(['thumbnail','user_id']) + [
            'thumbnail'          => $image,
            'user_id' => Auth::id()
        ]);

        return $this->json(
            "Video Created Sucessfully",
            $video
        );
    }

    public function templates()
    {
        $templates = $this->interactionRepo->getInteractionByCategoryID(2);

        return $this->json(
            'Template List',
            InteractionResource::collection($templates)
        );
    }

    public function templateStore(Request $request)
    {
        $image = $request->hasFile('thumbnail') ? $this->interactionRepo->storeFile($request->file('thumbnail'), 'template') : null;

        $template = $this->interactionRepo->create($request->except(['thumbnail','user_id']) + [
            'thumbnail'          => $image,
            'user_id' => Auth::id()
        ]);

        return $this->json(
            "Tempalte Created Sucessfully",
            $template
        );
    }
}
