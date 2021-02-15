<?php

namespace App\Http\Controllers\API\UserManagement;

use Illuminate\Http\Request;
use App\Helpers\API\ApiHelpers;
use Illuminate\Support\Facades\DB;
use Repository\User\UserRepository;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\QueryException;
use App\Http\Resources\Auth\AuthResource;
use App\Notifications\RegisteredUserMail;
use Illuminate\Support\Facades\Notification;
use App\Http\Requests\API\Staff\SignInRequest;
use App\Http\Requests\API\Staff\SignUpRequest;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class AuthController extends Controller
{
    public $authRepo;

    public function __construct(UserRepository $authRepository)
    {
        $this->authRepo = $authRepository;
    }

    public function login(SignInRequest $request)
    {
        $credentials    = $request->only(['email', 'password']);
        if(!Auth()->attempt($credentials)){
            $code       = Response::HTTP_UNAUTHORIZED;
            $message    = "Credentials does not matches.";
            $response   = ApiHelpers::createAPIResponse(true, $code, $message, null,null);
            return new JsonResponse($response);
        }else{
            $token      = Auth()->user()->createToken('authToken')->accessToken;
            $code       = Response::HTTP_OK;
            $message    = "Welcome To ENSWADESH.";
            $response   = ApiHelpers::createAPIResponse(false, $code, $message, null,$token);
            return new JsonResponse($response);
        }
    }

    public function register(SignUpRequest $request)
    {
        $user = null;
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
            $token      = $user->createToken('authToken')->accessToken;
            $code       = Response::HTTP_CREATED;
            $message    = "user Successfully Registered.";
            $response   = ApiHelpers::createAPIResponse(false, $code, $message, new AuthResource($user),$token);
            Notification::send($user, new RegisteredUserMail());
            DB::commit();
        } catch (QueryException $exception) {
            DB::rollback();
            $message = $exception->getMessage();
            $code = $exception->getCode();
            $response = ApiHelpers::createAPIResponse(true, $code, $message, null, null);
        }
        return new JsonResponse($response, $user ? Response::HTTP_CREATED : Response::HTTP_INTERNAL_SERVER_ERROR);
    }

    public function dusers(){
        try {
            $user       = Auth::user();
            $code       = Response::HTTP_FOUND;
            $message    = "Welcome ".$user->name. " in ENSWADESH";
            $response   = ApiHelpers::createAPIResponse(false, $code, $message, $user);
        } catch (QueryException $exception) {
            $code       = $exception->getCode();
            $message    = $exception->getMessage();
            $response   = ApiHelpers::createAPIResponse(true, $code, $message, null);
        }
        return new JsonResponse($response, $code == Response::HTTP_FOUND ? Response::HTTP_FOUND : Response::HTTP_NO_CONTENT);
    }

}
