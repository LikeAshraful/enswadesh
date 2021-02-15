<?php

namespace App\Http\Controllers\API\UserManagement;

use Illuminate\Http\Request;
use App\Helpers\API\ApiHelpers;
use Illuminate\Support\Facades\DB;
use Repository\User\OtpRepository;
use Repository\User\UserRepository;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\QueryException;
use App\Notifications\RegisteredUserMail;
use App\Http\Controllers\JsonResponseTrait;
use Illuminate\Support\Facades\Notification;
use App\Http\Requests\API\User\SignUpRequest;
use App\Http\Resources\Vendor\VendorResource;
use App\Http\Requests\Users\UpdateUserRequest;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class VendorController extends Controller
{
    use JsonResponseTrait;

    public $vendorRepo;
    public $otpRepo;

    public function __construct(UserRepository $vendorRepository, OtpRepository $otpRepository)
    {
        $this->vendorRepo = $vendorRepository;
        $this->otpRepo  = $otpRepository;
    }

    public function index()
    {
        $users = $this->vendorRepo->findByID(Auth::id());
        $staffs = $users->staffs->count() ." Staff Found!";
        return $this->json('Staff list', [
                'staffs'  => $staffs
            ]);
    }

    public function store(SignUpRequest $request)
    {
        $user = DB::transaction(function () use ($request) {
            $user = $this->vendorRepo->create($request->all());
            $this->vendorRepo->updateOrNewBy($user);
            $userOtp = $this->otpRepo->generateOtpForUser($user);
            $this->vendorRepo->staffVendorByID($user->id);
            return compact('user', 'userOtp');
        });

        return $this->json('User registered successfully. Please check your email or phone to active account', [
            'token' => $user['userOtp']['token'],
            'otp'   => $user['userOtp']['otp']
        ]);
    }

    public function show($id)
    {
        try {
            $user       = $this->vendorRepo->findByID($id);
            $code       = Response::HTTP_FOUND;
            $message    = $user->name." Hello!";
            $response   = ApiHelpers::createAPIResponse(false, $code, $message, $user, null);
        } catch (QueryException $exception) {
            $code       = $exception->getCode();
            $message    = $exception->getMessage();
            $response   = ApiHelpers::createAPIResponse(true, $code, $message, null, null);
        }
        return new JsonResponse($response, $code == Response::HTTP_FOUND ? Response::HTTP_FOUND : Response::HTTP_NO_CONTENT);
    }

    public function update(Request $request, $id)
    {
        try {
            $user  = $this->vendorRepo->findByID($id);
            $user  = $this->vendorRepo->updateByID($id,$request->except('password') + [
                'password'  => Hash::make($request->password),
            ]);
            $code       = Response::HTTP_FOUND;
            $message    = " Edit Your Information!";
            $response   = ApiHelpers::createAPIResponse(false, $code, $message, $user, null);
        } catch (QueryException $exception) {
            $code       = $exception->getCode();
            $message    = $exception->getMessage();
            $response   = ApiHelpers::createAPIResponse(true, $code, $message, null, null);
        }
        return new JsonResponse($response, $code == Response::HTTP_FOUND ? Response::HTTP_FOUND : Response::HTTP_NO_CONTENT);
    }

    public function destroy($id)
    {
        try {
            $user       = $this->vendorRepo->deleteByID($id);
            $code       = Response::HTTP_FOUND;
            $message    =" Staff Deleted!";
            $response   = ApiHelpers::createAPIResponse(false, $code, $message, VendorResource::collection($user), null);
        } catch (QueryException $exception) {
            $code       = $exception->getCode();
            $message    = $exception->getMessage();
            $response   = ApiHelpers::createAPIResponse(true, $code, $message, null, null);
        }
        return new JsonResponse($response, $code == Response::HTTP_FOUND ? Response::HTTP_FOUND : Response::HTTP_NO_CONTENT);
    }
}