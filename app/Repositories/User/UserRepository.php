<?php

namespace Repository\User;

use App\Models\User;
use App\Models\Profile;
use App\Models\UserOtp;
use App\Models\VendorStaff;
use Repository\BaseRepository;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserRepository extends BaseRepository
{

    public function model()
    {
        return User::class;
    }

    public function getAllUsersForAdmin($id)
    {
        return $this->model()::where('role_id', '!=', $id)->get();
    }
    public function generateAccessToken(User $user): string
    {
        return $user->createToken('authToken')->accessToken;
    }

    public function createStaffByVendorID($id, $modelData)
    {
        return VendorStaff::create([
            'user_id'       => $id,
            'owner_id'      => Auth::id(),
            'title'         => $modelData['title'],
            'start_time'    => $modelData['start_time'],
            'end_time'      => $modelData['end_time'],
        ]);
    }

    public function getUserInfo()
    {
        return $this->model()::with('profile')->find(Auth::id());
    }
    public function findByUser($id)
    {
        return Profile::where('user_id', $id)->first();
    }

    public function updateOrNewBy(User $user, array $profileData = []): Profile
    {
        if ($profile = $user->profile) {
            $profile->update($profileData);
            return $profile->refresh();
        }
        return $user->profile()->create($profileData);
    }

    public function updateProfileByID($id, array $modelData)
    {
        $profile = Profile::where('user_id', $id)->first();
         if($profile != null)
        {
            $profile->update($modelData);
        }else{
            return Profile::create($modelData);
        }
    }


    public function updateOtpByID($id, array $modelData)
    {
        $otp = UserOtp::where('user_id', $id)->first();
        if ($otp != null) {
            $otp->update($modelData);
        } else {
            return UserOtp::create($modelData);
        }
    }

    public function verifyOtpByID($id, $otp, array $modelData)
    {
        $otp = UserOtp::where('user_id', $id)->where('otp', $otp)->first();
        if ($otp != null) {
            $otp->update($modelData);
            notify()->success('You are verify by your OTP.', 'Success');
        } else {
            notify()->warning('Your OTP is not valid, please resend.', 'Warning');
            return back();
        }
    }

    public function storeFile(UploadedFile $file)
    {
        return Storage::put('fileuploads/user', $file);
    }

    public function updateFile($id)
    {
        $userImage = Profile::where('user_id', $id)->first();
        if ($userImage) {
            Storage::delete($userImage->image);
        }
    }

    public function updatePasswordByID($id)
    {
        $hashedPassword = Auth::user()->password;
        if (Hash::check($id['current_password'], $hashedPassword)) {
            if (!Hash::check($id['password'], $hashedPassword)) {
                Auth::user()->update([
                    'password' => $id['password']
                ]);
                notify()->success('Password Successfully Changed.', 'Success');
                return redirect()->route('login');
            } else {
                notify()->warning('New password cannot be the same as old password.', 'Warning');
            }
        } else {
            notify()->error('Current password not match.', 'Error');
        }
    }

    public function deleteByID($id)
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

    public function showOwnerByID($id)
    {
        try {
            $showOwner = $this->findByID($id);
            if ($showOwner->owner_id === 1) {
                $showOwner->owner_id = 0;
                $message = 'User Show Owner Successfully';
            } else {
                $showOwner->owner_id = 1;
                $message = 'User Show Owner Successfully';
            }
            $showOwner->save();
        } catch (\Exception $exception) {
            $message = $exception->getMessage();
        }
        notify()->success($message);
    }

    public function getUserBySearch($data)
    {
        return $this->model()::where('phone_number', 'like', '%'. $data .'%')->orWhere('email', 'like', '%'. $data .'%')->get();
    }

    public function getSearchMember($data)
    {
        return $this->model()::where('phone_number', 'like', '%'. $data .'%')->orWhere('email', 'like', '%'. $data .'%')->get();
    }

    public function findStaffByVendor($id)
    {
        return $this->model()::with('staffs.user')->find($id);
    }
}
