<?php

namespace App\Http\Controllers\API\UserManagement;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Repository\User\OtpRepository;
use Repository\User\UserRepository;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Notifications\RegisteredUserMail;
use App\Http\Controllers\JsonResponseTrait;
use Illuminate\Support\Facades\Notification;
use App\Http\Requests\API\User\SignInRequest;
use App\Http\Requests\API\User\SignUpRequest;
use Illuminate\Foundation\Auth\ThrottlesLogins;

class AuthController extends Controller
{
    use JsonResponseTrait, ThrottlesLogins;

    public $authRepo;
    public $otpRepo;

    public function __construct(UserRepository $authRepository, OtpRepository $otpRepository)
    {
        $this->authRepo = $authRepository;
        $this->otpRepo  = $otpRepository;
    }

    public function username()
    {
        return 'email';
    }

    public function login(SignInRequest $request)
    {
        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);
            return $this->sendLockoutResponse($request);
        }

        if (Auth::attempt($request->only(['email', 'password']))) {
            $user = auth()->user();
            return $this->json('Login successfully', [
                'access_token'  => $this->authRepo->generateAccessToken($user),
                'access_type'   => 'Bearer'
            ]);
        }

        return $this->bad('Invalid Credentials');
    }

    public function register(SignUpRequest $request)
    {
        $user = DB::transaction(function () use ($request) {
            $user = $this->authRepo->create($request->all());
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
}