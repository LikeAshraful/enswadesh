<?php

namespace Repository\Shop;

use App\Models\Shop\ShopMedia;
use Repository\BaseRepository;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class ShopMediaRepository extends BaseRepository
{
    function model()
    {
        return ShopMedia::class;
    }

    public function storeFile(UploadedFile $file)
    {
        return Storage::put('fileuploads/shops/media', $file);
    }

    public function shopGallery($images, $id)
    {
        $shopGallery = $this->model()::where('shop_id', $id)->get();
        if (count($shopGallery) == 0) {
            foreach ($images as $key => $image) {
                $shopMedia = $this->storeFile($image);
                $this->model()::create([
                    'shop_id'        => $id,
                    'image'          => $shopMedia
                ]);
            }
        }
    }

    public function shopGalleryUpdate($images, $id)
    {
        $check_type = is_array($images);
        if($check_type == false) {
            $data = array();
            foreach ($images as $key => $value) {
               array_push($data, $value->id);
            }
            $shopGallery = $this->model()::whereIn('id', $data)->get();
            foreach ($shopGallery as $key => $image) {
                //$shopMedia = $this->updateShopsMedia($image->id);
                $image->update([
                    'shop_id'        => $image->shop_id,
                    'image'          => $image->image
                ]);
            }
        } else {
            foreach ($images as $key => $image) {
                $shopMedia = $this->storeFile($image);
                $this->model()::create([
                    'shop_id'        => $id,
                    'image'          => $shopMedia
                ]);
            }
        }
    }

    public function updateShopsMedia($id)
    {
        $shopMedia = $this->findById($id);
        Storage::delete($shopMedia->image);
    }

}