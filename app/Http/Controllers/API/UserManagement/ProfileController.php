<?php

namespace App\Http\Controllers\API\UserManagement;

use Illuminate\Http\Request;
use Repository\User\UserRepository;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\JsonResponseTrait;
use App\Http\Requests\Profile\UpdateProfileRequest;

class ProfileController extends Controller
{
    use JsonResponseTrait;
    protected $userProfileRepo;

    public function __construct(UserRepository $userProfile)
    {
        $this->userProfileRepo=$userProfile;
    }

    public function update(Request $request)
    {
        if($request->model == "Profile")
        {
            $user       = $this->userProfileRepo->findByUser(Auth::id());
            $userImage  = $request->hasFile('image');
            $image      = $userImage ? $this->userProfileRepo->storeFile($request->file('image')) : $user->image;
            if($userImage)
            {
                $this->userProfileRepo->updateFile(Auth::id());
            }
            $user  = $this->userProfileRepo->updateProfileByID(Auth::id(),$request->except('social_link','image') + [
                'user_id'       => Auth::id(),
                'image'         => $image,
                'social_link'   => $request->social_link
            ]);
        }else {
            return $this->userProfileRepo->updateByID(Auth::id(), $request->all());
        }

        return $this->json('Profile Update successfully');
    }

    public function updatePassword(Request $request)
    {
        $changePassword = $this->userProfileRepo->updatePasswordByID($request->all());
        return $this->json('Password update successfully');
    }
}