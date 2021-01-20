<?php

namespace Repository\General\Interaction;

use Repository\BaseRepository;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use App\Models\General\Interaction\Interaction;
use Illuminate\Database\Eloquent\Model;

class InteractionRepository extends BaseRepository
{
    function model()
    {
        return Interaction::class;
    }

    //get all interaction category wise / all videos.
    public function getInteractionsByCategoryID($category_id)
    {
        return $this->model()::where('interaction_category_id', $category_id)->get();
    }

    public function storeFile(UploadedFile $file, $path)
    {
        return Storage::put('uploads/interaction/' . $path, $file);
    }

    //find or fail interaction Category wise / find video
    public function findInteractionByCategoryID($category_id, $id)
    {
        return $this->model()::where('interaction_category_id', $category_id)->find($id);
    }

    //show single interaction category wise
    public function showInteraction($category_id, $id)
    {
        return $this->model()::where('interaction_category_id', $category_id)->with('file')->find($id);
    }

}
