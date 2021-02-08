<?php

namespace App\Http\Controllers\API\UserManagement;

use Mail;
use Illuminate\Http\Request;
use App\Helpers\API\ApiHelpers;
use Illuminate\Support\Facades\DB;
use Repository\User\UserRepository;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Resources\Auth\AuthResource;
use App\Notifications\RegisteredUserMail;
use App\Http\Controllers\JsonResponseTrait;
use Illuminate\Support\Facades\Notification;
use App\Http\Requests\API\Staff\SignUpRequest;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class AuthController extends Controller
{
    use JsonResponseTrait;

    public $authRepo;

    public function __construct(UserRepository $authRepository)
    {
        $this->authRepo = $authRepository;
    }

    public function login(Request $request)
    {
        $loginData = $request->validate([
            'email'     => 'email|required',
            'password'  => 'required'
        ]);
        if (!Auth()->attempt($loginData)) {
            return response(['message' => 'Invalid Credentials']);
        }
        $accessToken = Auth()->user()->createToken('authToken')->accessToken;
        return $this->json(
            "Successfully Login",
            ['user' => Auth()->user(), 'access_token' => $accessToken]
        );
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name'          => 'required|max:55',
            'email'         => 'email|required|unique:users',
            'password'      => 'required|confirmed',
            'phone_number'  => 'required|max:12'
        ]);
        DB::beginTransaction();
        try {
            $user = $this->authRepo->create($request->except('role_id','password','otp') + [
                'role_id'       =>5,
                'password'      => Hash::make($request->password),
                'otp'           => rand(1000, 9999),
            ]);
            $this->authRepo->updateProfileByID($user->id,$request->except('user_id') + [
                'user_id'       => $user->id
            ]);
            $accessToken = $user->createToken('authToken')->accessToken;
            Notification::send($user, new RegisteredUserMail());
            DB::commit();
            return redirect()->route('text-link',$accessToken);
            // return $this->json(
            //     "User Created Sucessfully",
            //     [ 'user' => $user, 'access_token' => $accessToken],
            // );
        } catch (\Exception $exception) {
            DB::rollback();
            $message = $exception->getMessage();
        }
        notify()->success($message);
    }

    public function dusers(){
        $user = Auth::user();
        return $this->json(
            "Welcome ".$user->name. " in ENSWADESH",
            $user
        );
    }

}