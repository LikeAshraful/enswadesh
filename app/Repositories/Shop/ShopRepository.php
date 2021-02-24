<?php


namespace Repository\Shop;


use App\Models\Shop\Shop;
use App\Models\Shop\ShopMedia;
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

    public function storeFileShopMedia(UploadedFile $file)
    {
        return Storage::put('fileuploads/shops/media', $file);
    }

    public function shopGallery($images, $id)
    {

        $shopGallery = ShopMedia::where('shop_id', $id)->get();
        foreach ($images as $key => $image) {
            $shopMedia = $this->storeFileShopMedia($image);
            if (count($shopGallery) == 0) {
                ShopMedia::create([
                    'shop_id'        => $id,
                    'image'          => $shopMedia
                ]);
            } else {
                $shopGallery->update([
                    'shop_id'        => $id,
                    'image'          => $shopGallery->image
                ]);
            }

        }
    }

    public function updateByShopOwner($id)
    {
        return $this->model()::where('shop_owner_id', Auth::id())->find($id);
    }

    public function shopByMarketId($id, $per_page = null)
    {
        $shop = $this->model()::where('market_id', $id);
        if($per_page != null)
            return $shop->paginate($per_page);

        return $shop->get();
    }

    public function shopByMarketByFloorNo($id)
    {
        return DB::select("SELECT floor_no, COUNT(1) shop_count FROM `shops` WHERE market_id = '$id' GROUP BY floor_no ORDER BY 'ASC'");
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
        return $this->model()::where('shop_owner_id', $user_id )->findOrFail($id);
    }
}
