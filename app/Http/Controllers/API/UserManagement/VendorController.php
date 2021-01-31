<?php

namespace App\Http\Controllers\Api\UserManagement;

use Illuminate\Http\Request;
use App\Helpers\API\ApiHelpers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\QueryException;
use Repository\User\API\VendorRepository;
use App\Notifications\RegisteredUserMail;
use App\Http\Controllers\JsonResponseTrait;
use App\Http\Resources\Vendor\VendorResource;
use Illuminate\Support\Facades\Notification;
use App\Http\Requests\API\Staff\SignUpRequest;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class VendorController extends Controller
{
    use JsonResponseTrait;

    public $vendorRepo;
    
    public function __construct(VendorRepository $vendorRepository)
    {
        $this->vendorRepo = $vendorRepository;
    }

    public function index()
    {
        try {
            $users = $this->vendorRepo->findByID(Auth::id());
            // dd($users->users[0]->user->name);
            $code = Response::HTTP_FOUND;
            $message = $users->count() ." Staff Found!";
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
        try {
            $image = $request->hasFile('image') ? $this->vendorRepo->storeFile($request->file('image')) : null;
            $user = $this->vendorRepo->create($request->except('image','role_id','password') + [
                'image'         => $image,
                'role_id'       =>5,
                'password'      => Hash::make($request->password),
            ]);
            $accessToken = $user->createToken('authToken')->accessToken;
            $code = Response::HTTP_CREATED;
            $message = "user Successfully Registered.";
            $response = ApiHelpers::createAPIResponse(false, $code, $message, new VendorResource($user));
            Notification::send($user, new RegisteredUserMail());
        } catch (QueryException $exception) {
            $message = $exception->getMessage();
            $code = $exception->getCode();
            $response = ApiHelpers::createAPIResponse(true, $code, $message, null);
        }
        return new JsonResponse($response, $user ? Response::HTTP_CREATED : Response::HTTP_INTERNAL_SERVER_ERROR);
    }

    public function show($id)
    {
        
    }

    public function update(Request $request, User $user)
    {
        //
    }

    public function destroy($id)
    {
        try {
            $user = $this->vendorRepo->deleteStaff($id);
            $code = Response::HTTP_FOUND;
            $message = $user->name ." Staff Deleted!";
            $response = ApiHelpers::createAPIResponse(false, $code, $message, VendorResource::collection($user));
        } catch (QueryException $exception) {
            $code = $exception->getCode();
            $message = $exception->getMessage();
            $response = ApiHelpers::createAPIResponse(true, $code, $message, null);
        }
        return new JsonResponse($response, $code == Response::HTTP_FOUND ? Response::HTTP_FOUND : Response::HTTP_NO_CONTENT);
    }
}
