<?php


namespace Repository\Location;

use App\Models\Location\Area;
use Repository\BaseRepository;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class AreaRepository extends BaseRepository
{

    function model()
    {
        return Area::class;
    }

    public function getAll()
    {
        return $this->model()::with('cities')->get();
    }

    public function storeFile(UploadedFile $file)
    {
        return Storage::put('fileuploads/area', $file);
    }

    public function updateArea($id)
    {
        $area = $this->findById($id);
        Storage::delete($area->area_icon);
    }

    public function deleteArea($id)
    {
        $area = $this->findById($id);
        Storage::delete($area->area_icon);
        $area->delete();
    }
}
