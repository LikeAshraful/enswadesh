<?php

namespace App\Http\Controllers\Api\UserManagement;

use Illuminate\Http\Request;
use App\Helpers\API\ApiHelpers;
use Illuminate\Support\Facades\DB;
use Repository\User\UserRepository;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\QueryException;
use App\Notifications\RegisteredUserMail;
use App\Http\Controllers\JsonResponseTrait;
use Illuminate\Support\Facades\Notification;
use App\Http\Resources\Vendor\VendorResource;
use App\Http\Requests\API\Staff\SignUpRequest;
use App\Http\Requests\Users\UpdateUserRequest;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class VendorController extends Controller
{
    use JsonResponseTrait;

    public $vendorRepo;

    public function __construct(UserRepository $vendorRepository)
    {
        $this->vendorRepo = $vendorRepository;
    }

    public function index()
    {
        try {
            $users = $this->vendorRepo->findByID(Auth::id());
            $code = Response::HTTP_FOUND;
            $message = $users->staffs->count() ." Staff Found!";
            $response = ApiHelpers::createAPIResponse(false, $code, $message, VendorResource::make($users));
        } catch (QueryException $exception) {
            $code = $exception->getCode();
            $message = $exception->getMessage();
            $response = ApiHelpers::createAPIResponse(true, $code, $message, null);
        }
        return new JsonResponse($response, $code == Response::HTTP_FOUND ? Response::HTTP_FOUND : Response::HTTP_NO_CONTENT);
    }

    public function store(SignUpRequest $request)
    {
        $user = null;
        DB::beginTransaction();
        try {
            $user = $this->vendorRepo->create($request->except('role_id','password') + [
                'role_id'       =>5,
                'password'      => Hash::make($request->password),
            ]);
            $this->vendorRepo->updateProfileByID($user->id,$request->except('user_id') + [
                'user_id'       => $user->id
            ]);
            $this->vendorRepo->staffVendorByID($user->id);
            $code = Response::HTTP_CREATED;
            $message = "user Successfully Registered.";
            $response = ApiHelpers::createAPIResponse(false, $code, $message, new VendorResource($user));
            Notification::send($user, new RegisteredUserMail());
            DB::commit();
        } catch (QueryException $exception) {
            DB::rollback();
            $message = $exception->getMessage();
            $code = $exception->getCode();
            $response = ApiHelpers::createAPIResponse(true, $code, $message, null);
        }
        return new JsonResponse($response, $user ? Response::HTTP_CREATED : Response::HTTP_INTERNAL_SERVER_ERROR);
    }

    public function show($id)
    {
        try {
            $user = $this->vendorRepo->findByID($id);
            $code = Response::HTTP_FOUND;
            $message = $user->name." Hello!";
            $response = ApiHelpers::createAPIResponse(false, $code, $message, $user);
        } catch (QueryException $exception) {
            $code = $exception->getCode();
            $message = $exception->getMessage();
            $response = ApiHelpers::createAPIResponse(true, $code, $message, null);
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
            $code = Response::HTTP_FOUND;
            $message = " Edit Your Information!";
            $response = ApiHelpers::createAPIResponse(false, $code, $message, $user);
        } catch (QueryException $exception) {
            $code = $exception->getCode();
            $message = $exception->getMessage();
            $response = ApiHelpers::createAPIResponse(true, $code, $message, null);
        }
        return new JsonResponse($response, $code == Response::HTTP_FOUND ? Response::HTTP_FOUND : Response::HTTP_NO_CONTENT);
    }

    public function destroy($id)
    {
        try {
            $user = $this->vendorRepo->deleteByID($id);
            $code = Response::HTTP_FOUND;
            $message =" Staff Deleted!";
            $response = ApiHelpers::createAPIResponse(false, $code, $message, VendorResource::collection($user));
        } catch (QueryException $exception) {
            $code = $exception->getCode();
            $message = $exception->getMessage();
            $response = ApiHelpers::createAPIResponse(true, $code, $message, null);
        }
        return new JsonResponse($response, $code == Response::HTTP_FOUND ? Response::HTTP_FOUND : Response::HTTP_NO_CONTENT);
    }
}