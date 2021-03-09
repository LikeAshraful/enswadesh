<?php

namespace App\Http\Controllers\Auth;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Repository\User\UserRepository;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Redirect;
use App\Notifications\RegisteredUserMail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Notification;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    public $authRepo;

    public function __construct(UserRepository $authRepository)
    {
        $this->authRepo = $authRepository;
        $this->middleware('guest');
    }

    public function showRegistrationForm()
    {
        $role = Role::where('name', 'Customer')->first();
        return view('auth.register',compact('role'));
    }

    // use RegistersUsers;

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();
        DB::beginTransaction();
        try {
            $user = $this->authRepo->create($request->except('role_id','password') + [
                'role_id'       =>5,
                'password'      => Hash::make($request->password),
            ]);
            $this->authRepo->updateProfileByID($user->id,$request->except('user_id') + [
                'user_id'       => $user->id
            ]);
            $user_verification= $this->authRepo->updateOtpByID($user->id,$request->except('user_id','otp','access_token') + [
                'user_id'       => $user->id,
                'otp'           => rand(1000, 9999),
                'access_token'  => $user->createToken('authToken')->accessToken,
            ]);
            Notification::send($user, new RegisteredUserMail($user_verification));
            DB::commit();
            // return redirect()->route('otp-verify',$access_token)->with($user_verification);
            return view('auth.otp',compact('user_verification'));

        } catch (\Exception $exception) {
            DB::rollback();
            $message = $exception->getMessage();
        }

        notify()->warning($message);
        return redirect()->route('login');
    }

    public function otpVerification(Request $request)
    {
        $this->authRepo->verifyOtpByID($request->user_id,$request->otp,$request->except('otp_verified_at') + [
            'otp_verified_at'  => date('Y-m-d H:i:s'),
            ]);
        return redirect()->route('login');
    }

    protected function guard()
    {
        return Auth::guard();
    }

    protected function registered(Request $request, $user)
    {

    }

    protected $redirectTo = RouteServiceProvider::HOME;

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name'      => ['required', 'string', 'max:255'],
            'email'     => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password'  => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }
}
