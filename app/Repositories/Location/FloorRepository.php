<?php


namespace Repository\Location;

use App\Models\Location\Floor;
use Repository\BaseRepository;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class FloorRepository extends BaseRepository
{

    function model()
    {
        return Floor::class;
    }

    public function getAll()
    {
        return $this->model()::with('markets')->get();
    }
}
