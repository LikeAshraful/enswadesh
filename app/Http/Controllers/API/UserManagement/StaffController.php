<?php

namespace App\Http\Controllers\Api\UserManagement;

use Mail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Repository\User\API\StaffRepository;
use App\Http\Controllers\JsonResponseTrait;
use App\Http\Resources\Staff\StaffResource;

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
        $staffs = $this->staffRepo->getAll();
        return $this->json(
            'Staff list',
            StaffResource::collection($staffs)
        );
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'          => 'required|max:55',
            'email'         => 'email|required|unique:users',
            'password'      => 'required|confirmed',
            'phone_number'  => 'required|max:12'
        ]);
        $image = $request->hasFile('image') ? $this->staffRepo->storeFile($request->file('image')) : null;
        $staff = $this->staffRepo->create($request->except('image','role_id','password') + [
            'image'         => $image,
            'role_id'       =>5,
            'password'      => Hash::make($request->password),
        ]);
        $accessToken = $staff->createToken('authToken')->accessToken;
        $message = [
            'confirm_message'     => 'Dear '. $staff->name . ', Congratulations and Welcome  to ENSWADESH. We want you to know that we appreciate you taking the time to learn more.',
        ];
        // Mail::to($staff->email)->send(new RegistrationConfirmationEmail($message));
        return $this->json(
            "Staff Created Sucessfully",
            $staff
        );
    }

    public function show($id)
    {
        
    }

    public function update(Request $request, User $user)
    {
        //
    }

    public function destroy(User $user)
    {
        //
    }
}
