<?php

namespace App\Http\Controllers\API\UserManagement;

use Mail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Repository\User\API\AuthRepository;
use App\Http\Resources\Auth\AuthResource;
use App\Notifications\RegisteredUserMail;
use App\Http\Controllers\JsonResponseTrait;
use Illuminate\Support\Facades\Notification;

class AuthController extends Controller
{
    use JsonResponseTrait;

    public $authRepo;

    public function __construct(AuthRepository $authRepository)
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
        $image = $request->hasFile('image') ? $this->authRepo->storeFile($request->file('image')) : null;
        $user = $this->authRepo->create($request->except('image','role_id') + [
            'image' => $image,
            'role_id'=>3,
        ]);
        $accessToken = $user->createToken('authToken')->accessToken;
        Notification::send($user, new RegisteredUserMail());
        return $this->json(
            "User Created Sucessfully",
            [ 'user' => $user, 'access_token' => $accessToken],
        );
    }

    public function dusers(){
        $user = Auth::user();
        return $this->json(
            "Welcome ".$user->name. " in ENSWADESH",
            $user
        );
    }

}
