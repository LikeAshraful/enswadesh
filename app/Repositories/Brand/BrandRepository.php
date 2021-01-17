<?php

namespace App\Repositories\Brand;

use Repository\BaseRepository;
use Illuminate\Http\UploadedFile;
use App\Models\General\Brand\Brand;
use Illuminate\Support\Facades\Storage;
use App\Repositories\Interface\Brand\BrandInterface;

class BrandRepository extends BaseRepository {

    public function model()
    {
        return Brand::class;
    }

    public function storeFile(UploadedFile $file)
    {
        return Storage::put('brands', $file);
    }

    public function updateBrandIcon($id)
    {
        $brandIcon = $this->findByID($id);
        Storage::delete($brandIcon->icon);
    }

    public function deleteBrand($id)
    {
        $brandIcon = $this->findByID($id);
        Storage::delete($brandIcon->icon);
        $brandIcon->delete(); 
    }
}
