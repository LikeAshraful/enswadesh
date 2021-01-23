<?php

namespace App\Http\Controllers\Api\UserManagement;

use Mail;
use Illuminate\Http\Request;
use App\Helpers\API\ApiHelpers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\QueryException;
use Repository\User\API\StaffRepository;
use App\Http\Controllers\JsonResponseTrait;
use App\Http\Resources\Staff\StaffResource;
use App\Http\Requests\API\Staff\SignUpRequest;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class StaffController extends Controller
{
    use JsonResponseTrait;

    public $staffRepo;
    
    public function __construct(StaffRepository $staffRepository)
    {
        $this->staffRepo = $staffRepository;
    }

    public function index()
    {
        try {
            $staffs = $this->staffRepo->getAll();
            $code = Response::HTTP_FOUND;
            $message = $staffs->count() ." Staff Found!";
            $response = ApiHelpers::createAPIResponse(false, $code, $message, StaffResource::collection($staffs));
        } catch (QueryException $exception) {
            $code = $exception->getCode();
            $message = $exception->getMessage();
            $response = ApiHelpers::createAPIResponse(true, $code, $message, null);
        }
        return new JsonResponse($response, $code == Response::HTTP_FOUND ? Response::HTTP_FOUND : Response::HTTP_NO_CONTENT);
    }

    public function store(SignUpRequest $request)
    {
        $staff = null;
        try {
            $image = $request->hasFile('image') ? $this->staffRepo->storeFile($request->file('image')) : null;
            $staff = $this->staffRepo->create($request->except('image','role_id','password') + [
                'image'         => $image,
                'role_id'       =>5,
                'password'      => Hash::make($request->password),
            ]);
            $accessToken = $staff->createToken('authToken')->accessToken;
            $code = Response::HTTP_CREATED;
            $message = "Staff Successfully Registered.";
            $response = ApiHelpers::createAPIResponse(false, $code, $message, new StaffResource($staff));
        } catch (QueryException $exception) {
            $message = $exception->getMessage();
            $code = $exception->getCode();
            $response = ApiHelpers::createAPIResponse(true, $code, $message, null);
        }
        return new JsonResponse($response, $staff ? Response::HTTP_CREATED : Response::HTTP_INTERNAL_SERVER_ERROR);
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
            $staff = $this->staffRepo->deleteStaff($id);
            $code = Response::HTTP_FOUND;
            $message = $staff->name ." Staff Deleted!";
            $response = ApiHelpers::createAPIResponse(false, $code, $message, StaffResource::collection($staff));
        } catch (QueryException $exception) {
            $code = $exception->getCode();
            $message = $exception->getMessage();
            $response = ApiHelpers::createAPIResponse(true, $code, $message, null);
        }
        return new JsonResponse($response, $code == Response::HTTP_FOUND ? Response::HTTP_FOUND : Response::HTTP_NO_CONTENT);
    }
}
