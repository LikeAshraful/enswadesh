<?php

namespace App\Http\Controllers\Backend\UserManagement;

use App\Models\Profile;
use Illuminate\Http\Request;
use Repository\User\UserRepository;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
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
        // dd($request->file('image'));
        // $image = $request->hasFile('image') ? $this->userProfileRepo->storeFile($request->file('image')) : null;
        // $user = $this->userProfileRepo->create($request->except('image') + [
        //     'image'     =>  $image,
        // ]);
        $user = Auth::user();
        $profile = Profile::where('user_id', $user->id)->first();
        if($profile != null)
        {
            $profile->address = $request->address;
            $profile->bio = $request->bio;
            $profile->save();
        }else{
            $profile = new Profile;
            $profile->user_id = $user->id;
            $profile->address = $request->address;
            $profile->bio = $request->bio;
            $profile->save();
        }
        

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
        $hashedPassword = Auth::user()->password;
        if (Hash::check($request->current_password, $hashedPassword)) {
            if (!Hash::check($request->password, $hashedPassword)) {
                Auth::user()->update([
                    'password' => Hash::make($request->password)
                ]);
                Auth::logout();
                notify()->success('Password Successfully Changed.', 'Success');
                return redirect()->route('login');
            } else {
                notify()->warning('New password cannot be the same as old password.', 'Warning');
            }
        } else {
            notify()->error('Current password not match.', 'Error');
        }
        return redirect()->back();
    }
}