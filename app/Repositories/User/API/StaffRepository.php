<?php

namespace Repository\User\API;

use App\Models\Role;
use App\Models\User;
use Repository\BaseRepository;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Collection;

class StaffRepository extends BaseRepository {

    public function model()
    {
        return User::class;
    }

    public function getAll(): Collection
    {
        $roles      = Role::where('slug','=','staff')->first();
        return $this->model()::where('role_id',$roles->id)->get(); 
    }

    public function storeFile(UploadedFile $file)
    {
        return Storage::put('fileuploads/brands', $file);
    }

    public function updateVendorImage($id)
    {
        $brandIcon = $this->findByID($id);
        Storage::delete($brandIcon->icon);
    }
}
