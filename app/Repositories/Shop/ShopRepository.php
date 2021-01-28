<?php


namespace Repository\Shop;


use App\Models\Shop\Shop;
use Repository\BaseRepository;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

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
        Storage::delete($shop->shop_logo);
        Storage::delete($shop->shop_cover_image);
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
