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

    public function marketsByCity($id)
    {
        return $this->model()::with('marketsByCity')->find($id);
    }

    public function getTopMarkets($id)
    {
        return $this->model()::with('marketsByCity')
                    ->withCount('shops')->orderBy('shops_count', 'desc')
                    ->where('id', $id)
                    ->limit(8)->get();
    }

    public function storeFile(UploadedFile $file)
    {
        return Storage::put('fileuploads/city', $file);
    }

    public function updateCity($id)
    {
        $city = $this->findById($id);
        Storage::delete($city->city_icon);
    }

    public function deleteCity($id)
    {
        $city = $this->findById($id);
        Storage::delete($city->city_icon);
        $city->delete();
    }
}
