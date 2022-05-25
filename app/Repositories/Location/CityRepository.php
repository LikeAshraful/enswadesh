<?php


namespace Repository\Location;

use App\Models\Location\City;
use Repository\BaseRepository;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class CityRepository extends BaseRepository
{

    function model()
    {
        return City::class;
    }

    public function storeFile(UploadedFile $file)
    {
        return Storage::put('fileuploads/city', $file);
    }

    public function updateCity($id)
    {
        $city = $this->findById($id);
        Storage::delete($city->icon);
    }

    public function deleteCity($id)
    {
        $city = $this->findById($id);
        Storage::delete($city->icon);
        $city->delete();
    }
}
