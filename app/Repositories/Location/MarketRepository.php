<?php


namespace Repository\Location;

use Repository\BaseRepository;
use App\Models\Location\Market;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Collection;

class MarketRepository extends BaseRepository
{

    function model()
    {
        return Market::class;
    }

    public function getAll(): Collection
    {
        return $this->model()::with('areas')->get();
    }

    public function getTopMarkets($id)
    {
        return $this->model()::where('city_id', $id)->withCount('shops')->orderBy('shops_count', 'desc')->limit(8)->get();
    }

    public function storeFile(UploadedFile $file)
    {
        return Storage::put('fileuploads/market', $file);
    }

    public function updateMarket($id)
    {
        $market = $this->findById($id);
        Storage::delete($market->market_icon);
    }

    public function deleteMarket($id)
    {
        $market = $this->findById($id);
        Storage::delete($market->market_icon);
        $market->delete();
    }
}
