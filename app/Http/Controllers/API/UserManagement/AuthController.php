<?php

namespace App\Http\Controllers\API\UserManagement;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Repository\User\OtpRepository;
use Repository\Role\RoleRepository;
use Repository\User\UserRepository;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Notifications\RegisteredUserMail;
use App\Http\Controllers\JsonResponseTrait;
use Illuminate\Support\Facades\Notification;
use App\Http\Requests\Users\SignInRequest;
use App\Http\Requests\Users\SignUpRequest;
use Illuminate\Foundation\Auth\ThrottlesLogins;

class AuthController extends Controller
{
    use JsonResponseTrait, ThrottlesLogins;

    public $authRepo;
    public $otpRepo;
    public $roleRepo;

    public function __construct(UserRepository $authRepository, OtpRepository $otpRepository, RoleRepository $roleRepository)
    {
        $this->authRepo = $authRepository;
        $this->otpRepo  = $otpRepository;
        $this->roleRepo  = $roleRepository;
    }

    public function username()
    {
         $login = request()->input('phone_number');

        $field = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'phone_number';
        request()->merge([$field => $login]);
        return $field;
    }

    public function login(SignInRequest $request)
    {
        $user = $this->authRepo->model()::where($this->username(), $request->phone_number)->first();
        if(!empty($user)){
            if($user->role_id == $this->roleRepo->getRoleForVendor()->id && $user->status == 0){
                return $this->bad('You are not approved for vendor');
            }
            if($user->role_id == $this->roleRepo->getRoleForVendor()->id || $user->role_id == $this->roleRepo->getRoleForStaff()->id || $user->role_id == $this->roleRepo->getRoleForCustomer()->id){
                if ($this->hasTooManyLoginAttempts($request)) {
                    $this->fireLockoutEvent($request);
                    return $this->sendLockoutResponse($request);
                }
                if (Auth::attempt(([$this->username()=>$request->phone_number, 'password'=>$request->password]))) {
                    $user = auth()->user();
                    return $this->json('Login successfully', [
                        'access_token'  => $this->authRepo->generateAccessToken($user),
                        'access_type'   => 'Bearer'
                    ]);
                }
                return $this->bad('Invalid Credentials');
            }
            return $this->bad('Authentication process will be valid for customer, staff and vendor');
        }
        return $this->bad('Invalid Credentials');
    }

    public function register(SignUpRequest $request)
    {
        $user = DB::transaction(function () use ($request) {
            $user = $this->authRepo->create($request->all() + [
                'role_id'   =>  $this->roleRepo->getRoleForCustomer()->id
            ]);
            $this->authRepo->updateOrNewBy($user);
            $userOtp = $this->otpRepo->generateOtpForUser($user);
            return compact('user', 'userOtp');
        });

        Notification::send($user['user'], new RegisteredUserMail($user['userOtp']));

        return $this->json('User registered successfully. Please check your email or phone to active account', [
            'token' => $user['userOtp']['token'],
            'otp'   => $user['userOtp']['otp']
        ]);
    }

    public function verifyOtp(Request $request)
    {
        $request->validate([
            'token' => 'required|exists:user_otps',
            'otp'   => 'required|min:4'
        ]);

        if ($userOtp = $this->otpRepo->verifyOtp($request->token, $request->otp)) {
            return $this->json('Otp verifyed successfully', [
                'access_token'  => $this->authRepo->generateAccessToken($userOtp->user),
                'access_type'   => 'Bearer'
            ]);
        }

        return $this->bad('Invalid OTP');
    }

    public function getAuthUser()
    {
        return $this->json('Auth user info', auth()->user());
    }

    public function logout(Request $request)
    {
        Auth::logout();
    }
}
