<?php

namespace Repository\General;

use Repository\BaseRepository;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use App\Models\General\Interaction\Interaction;

class InteractionRepository extends BaseRepository
{
    function model()
    {
        return Interaction::class;
    }

    public function getInteractionByCategoryID($id)
    {
        return $this->model()::where('interaction_category_id', $id)->get();
    }

    public function storeFile(UploadedFile $file, $path)
    {
        return Storage::put('uploads/interaction/' . $path, $file);
    }
}
