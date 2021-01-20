<?php


namespace Repository\Location;

use App\Models\Location\Floor;
use Repository\BaseRepository;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Collection;

class FloorRepository extends BaseRepository
{

    function model()
    {
        return Floor::class;
    }

    public function getAll(): Collection
    {
        return $this->model()::with('markets')->get();
    }
}
