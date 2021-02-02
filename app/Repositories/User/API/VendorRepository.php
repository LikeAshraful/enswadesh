<?php

namespace Repository\User\API;

use App\Models\Role;
use App\Models\User;
use Repository\BaseRepository;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Collection;

class VendorRepository extends BaseRepository {

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

    public function updateStaffImage($id)
    {
        $staffImage = $this->findByID($id);
        Storage::delete($staffImage->icon);
    }

    public function deleteStaff($id)
    {
        $staffImage = $this->findByID($id);
        dd($staffImage);
        Storage::delete($staffImage->image);
        $staffImage->delete(); 
    }
}
