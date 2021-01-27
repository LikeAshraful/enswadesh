<?php

namespace App\Http\Controllers\Backend\UserManagement;

use Illuminate\Http\Request;
use Repository\User\UserRepository;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\Profile\UpdateProfileRequest;
use App\Http\Requests\Profile\UpdatePasswordRequest;

class ProfileController extends Controller
{
    protected $userProfileRepo;

    public function __construct(UserRepository $userProfile)
    {
        $this->userProfileRepo=$userProfile;

    }

    public function index()
    {
        Gate::authorize('backend.profile.update');
        return view('backend.profile.index');
    }

    public function update(UpdateProfileRequest $request)
    {
        $user       = $this->userProfileRepo->findByUser(Auth::id());
        $userImage  = $request->hasFile('image');
        $image      = $userImage ? $this->userProfileRepo->storeFile($request->file('image')) : $user->image;
        if($userImage)
        {
            $this->userProfileRepo->updateFile(Auth::id());
        }
        $user  = $this->userProfileRepo->updateProfileByID(Auth::id(),$request->except('user_id','image') + [
            'user_id'       => Auth::id(),
            'image'         => $image
        ]);
        notify()->success('Profile Successfully Updated.', 'Updated');
        return redirect()->back();
    }

    public function changePassword()
    {
        Gate::authorize('backend.profile.password');
        return view('backend.profile.security');
    }

    public function updatePassword(UpdatePasswordRequest $request)
    {
        $changePassword = $this->userProfileRepo->updatePasswordByID($request->all());
        return redirect()->back();
    }
}