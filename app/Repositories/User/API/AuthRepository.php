<?php

namespace Repository\User\API;
use Repository\BaseRepository;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthRepository extends BaseRepository {

    function model()
    {
        return User::class;
    }

    public function storeFile(UploadedFile $file)
    {
        return Storage::put('fileuploads/users', $file);
    }
}
