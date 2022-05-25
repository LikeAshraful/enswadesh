<?php


namespace Repository\Shop;


use App\Models\Shop\Shop;
use App\Models\Location\Floor;
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

    public function allShop()
    {
        return $this->model()::where('status', 1)->get();
    }

    public function getAllUserID($field, $id)
    {
        return $this->model()::where($field, $id)->where('status', 1)->get();
    }

    public function storeFile(UploadedFile $file)
    {
        return Storage::put('fileuploads/shops', $file);
    }

    public function updateByShopOwner($id)
    {
        return $this->model()::where('shop_owner_id', Auth::id())->find($id);
    }

    public function shopByMarketId($id)
    {
        $shop = $this->model()::where('market_id', $id);
        return $shop->get();
    }

    public function shopByMarketFloor($markeId, $floorId)
    {
        $shop = $this->model()::where('market_id', $markeId)->where('floor_id', $floorId);
        return $shop->get();
    }

    public function getShopCountByMarketFloor($marketId)
    {
        return DB::select("SELECT COUNT(*) as shop_count, fl.id as id, fl.floor as floor FROM floors fl INNER  JOIN shops sh ON sh.floor_id = fl.id WHERE sh.market_id = '$marketId' GROUP BY sh.floor_id ORDER BY sh.floor_id;");
    }

    public function updateShopsLogo($id)
    {
        $shop = $this->findById($id);
        Storage::delete($shop->logo);
    }

    public function updateShopsImage($id)
    {
        $shop = $this->findById($id);
        Storage::delete($shop->cover_image);
    }

    public function updateShopsOgImage($id)
    {
        $shop = $this->findById($id);
        Storage::delete($shop->meta_og_image);
    }

    public function deleteShops($id)
    {
        $shop = $this->findById($id);
        Storage::delete($shop->logo);
        Storage::delete($shop->cover_image);
        Storage::delete($shop->meta_og_image);
        $shop->delete();
    }

    public function findOrFailByUserID($user_id, $id): Model
    {
        return $this->model()::where('shop_owner_id', $user_id)->where('status', 'Approved')->withCount('subscribeShops')->findOrFail($id);
    }

    public function checkApproveShop($user_id, $id)
    {
        $approved =  $this->model()::where('shop_owner_id', $user_id)->where('status', 'Approved')->find($id);
        $declined =  $this->model()::where('shop_owner_id', $user_id)->where('status', 'Declined')->find($id);
        if($approved != null)
        {
            return $approved;
        }elseif($declined != null)
        {
            return $declined;
        }else
        {
            return $this->model()::where('shop_owner_id', $user_id)->where('status', 'Pending')->findOrFail($id);
        }

    }

    public function searchShopByMarket($marketId, $keyword, $floorId)
    {
        $shops = $this->model()::where('market_id', $marketId)->where('floor_id', $floorId)->where('name', 'LIKE', '%' . $keyword . '%');
        return $shops->get();
    }

    public function mainSearchShops($keyword)
    {
        $shops = $this->model()::where('name', 'LIKE', '%' . $keyword . '%');
        return $shops->get();
    }

    public function getNameAndCity($shopID)
    {
        return $this->model()::select('id', 'name', 'city_id', 'market_id',)
            ->with(['city' => function($city) {
                $city->select('id', 'name');
            }])
            ->with(['market' => function($city) {
                $city->select('id', 'name');
            }])
            ->firstOrFail($shopID);
    }
}
