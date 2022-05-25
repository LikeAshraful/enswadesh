<?php

namespace Repository\Interaction;

use Repository\BaseRepository;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use App\Models\Interaction\InteractionTopic;

class TopicRepository extends BaseRepository
{
    function model()
    {
        return InteractionTopic::class;
    }

    public function storeFile(UploadedFile $file)
    {
        return Storage::put('uploads/interaction/topic', $file);
    }

    public function getTopicByCategoryID($id)
    {
        return $this->model()::where('interaction_category_id', $id)->get();
    }

    public function deleteTopic($id)
    {
        $topic = $this->findById($id);
        Storage::delete($topic->thumbnail);
        $topic->delete();
    }

}
