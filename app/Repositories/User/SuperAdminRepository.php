<?php

namespace Repository\User;
use App\Models\Role;
use App\Models\User;
use Repository\BaseRepository;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class SuperAdminRepository extends BaseRepository {

    public function model()
    {
        return User::class;
    }
    public function allVendor()
    {
        $roles = Role::where('slug','=','vendor')->first();
        return User::where('role_id',$roles->id)->get();
    }
    public function allRole()
    {
        return Role::get();
    }

    public function storeFile(UploadedFile $file)
    {
        return Storage::put('fileuploads/user', $file);
    }

    public function updateImageForSuperAdmin($id)
    {
        $userImage = $this->findByID($id);
        Storage::delete($userImage->icon);
    }

    public function deleteForSuperAdmin($id)
    {
        $userImage = $this->findByID($id);
        Storage::delete($userImage->image);
        $userImage->delete(); 
    }

    public function publishByID($id)
    {
        try {
            $publish = $this->findByID($id);
            if ($publish->status === 1) {
                $publish->status = 0;
                $message = 'User Publish Successfully';
            } else {
                $publish->status = 1;
                $message = 'User Unpublish Successfully';
            }
            $publish->save();
        } catch (\Exception $exception) {
            $message = $exception->getMessage();
        }
        notify()->success($message);
    }

    public function blockByID($id)
    {
        try {
            $blocked = $this->findByID($id);
            if ($blocked->suspend === 1) {
                $blocked->suspend = 0;
                $message = 'User Blocked Successfully';
            } else {
                $blocked->suspend = 1;
                $message = 'User Unblocked Successfully';
            }
            $blocked->save();
        } catch (\Exception $exception) {
            $message = $exception->getMessage();
        }
        notify()->success($message); 
    }
}
