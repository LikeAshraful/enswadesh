<?php

namespace App\Http\Controllers\API\UserManagement;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Repository\User\OtpRepository;
use Repository\User\UserRepository;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\JsonResponseTrait;
use App\Http\Requests\API\User\SignUpRequest;
use App\Http\Resources\Vendor\VendorResource;

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
        $users  = $this->vendorRepo->findByID(Auth::id());
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
        $user       = $this->vendorRepo->findByID($id);
        $message    = $user->name." Hello!";
        return $this->json($message,[VendorResource::make($user)]);
    }

    public function update(Request $request, $id)
    {
        $user = $this->vendorRepo->findByID($id);
        $user = $this->vendorRepo->updateByID($id,$request->all());
        return $this->json('Updated You Info',[VendorResource::make($user)]);
    }

    public function destroy($id)
    {
        $user       = $this->vendorRepo->deleteByID($id);
        $message    =" Staff Deleted!";
        return $this->json($message, [VendorResource::make($user)]);
    }
}
