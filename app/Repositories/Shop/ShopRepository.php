<?php


namespace Repository\Shop;


use App\Models\Shop\Shop;
use Repository\BaseRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

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

    public function updateShops($id)
    {
        $shop = $this->findById($id);
        Storage::delete($shop->shop_icon);
    }

    public function deleteShops($id)
    {
        $shop = $this->findById($id);
        Storage::delete($shop->shop_icon);
        $shop->delete();
    }
}
