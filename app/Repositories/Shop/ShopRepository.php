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

    public function shopByMarketId($id, $per_page = null)
    {
        $shop = $this->model()::where('market_id', $id);
        if ($per_page != null)
            return $shop->paginate($per_page);

        return $shop->get();
    }

    public function shopByMarketByFloorNo($id)
    {
        // $floors = Floor::all();
        //return $floor;
        return DB::select("SELECT floor_id, COUNT(1) shop_count FROM `shops` WHERE market_id = '$id' GROUP BY floor_id ORDER BY 'ASC'");
        //$count = DB::select("SELECT floor_id, COUNT(1) shop_count FROM `shops` WHERE market_id = '$id' GROUP BY floor_id ORDER BY floor_id");
        // $count = DB::table('shops')
        //     ->where('market_id', $id)
        //     ->select('floor_id', DB::raw('count(*) as shop_count'))
        //     ->groupBy('floor_id')
        //     ->orderBy('floor_id')
        //     ->get()->toArray();
        // $fff =  collect($floors)->toArray();
        // $ccc =  collect($count)->toArray();
        // dd($arr->toArray());
        // $result = [];
        // $array = array_unique(array_merge($fff, $ccc), SORT_REGULAR);
        // dd($array);
        // foreach ($fff as $key1 => $value1) {
        //     foreach ($ccc as $key2 => $value2) {
        //         dd($value2);
        //         dd($value1['id']);
        //         return $value2->floor_id;
        //         if ($value1['id'] == $value2->floor_id) {
        //             $result[$value1] = $value2 + $value1;
        //         }
        //     }
        // }
        // dd($result);
        // return $array;
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
        return $this->model()::where('shop_owner_id', $user_id)->where('status', 1)->findOrFail($id);
    }

    public function checkApproveShop($user_id, $id): Model
    {
        return $this->model()::where('shop_owner_id', $user_id)->where('status', 0)->findOrFail($id);
    }
}
