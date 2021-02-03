<?php


namespace Repository\Shop;


use App\Models\Shop\Shop;
use Repository\BaseRepository;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Collection;

class ShopRepository extends BaseRepository
{

    function model()
    {
        return Shop::class;
    }

    public function storeFile(UploadedFile $file)
    {
        return Storage::put('fileuploads/shops', $file);
    }

    public function updateByShopOwner($id)
    {
        return $this->model()::where('shop_owner_id', Auth::id())->find($id);
    }

    public function shopByMarketId($id): Collection
    {
        return $this->model()::where('market_id', $id)->get();
    }

    public function shopByMarketByFloorNo($id)
    {
        return DB::select("SELECT floor_no, COUNT(1) shop_count FROM `shops` WHERE market_id = '$id' GROUP BY floor_no ORDER BY 'ASC'");
    }

    public function updateShopsLogo($id)
    {
        $shop = $this->findById($id);
        Storage::delete($shop->shop_logo);
    }

    public function updateShopsImage($id)
    {
        $shop = $this->findById($id);
        Storage::delete($shop->shop_cover_image);
    }

    public function updateShopsOgImage($id)
    {
        $shop = $this->findById($id);
        Storage::delete($shop->meta_og_image_shop);
    }

    public function deleteShops($id)
    {
        $shop = $this->findById($id);
        Storage::delete($shop->shop_logo);
        Storage::delete($shop->shop_cover_image);
        Storage::delete($shop->meta_og_image_shop);
        $shop->delete();
    }
}
