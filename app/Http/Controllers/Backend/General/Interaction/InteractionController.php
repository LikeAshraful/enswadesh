<?php

namespace App\Http\Controllers\Backend\General\Interaction;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Repository\General\Interaction\InteractionRepository;

class InteractionController extends Controller
{
    public $interactionRepo;

    public function __construct(InteractionRepository $interactionRepository)
    {
        $this->interactionRepo = $interactionRepository;
    }

    public function videos()
    {
        $videos = $this->interactionRepo->getInteractionsByCategoryID(1);
        return view('backend.general.video.index',compact('videos'));
    }

    public function showVideo($id)
    {
        $video = $this->interactionRepo->findByID($id);
        return $video;
    }

    public function templates()
    {
        $templates = $this->interactionRepo->getInteractionsByCategoryID(2);
        return view('backend.general.template.index',compact('templates'));
    }

    public function statusUpdate(Request $request, $id)
    {
        $this->interactionRepo->updateByID($id, $request->all());
        notify()->success('Status Successfully Updated.', 'Updated');
    }

    public function destroy($id)
    {
        //
    }
}
