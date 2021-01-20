<?php

namespace App\Http\Controllers\Api\UserManagement;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Repository\User\API\VendorRepository;
use App\Http\Controllers\JsonResponseTrait;
use App\Http\Resources\Vendor\VendorResource;
use App\Http\Resources\Vendor\VendorResourceCollection;

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
        $vendors = $this->vendorRepo->getAll();
        return $this->json(
            'Vendor list',
            VendorResource::collection($vendors)
        );
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'      => 'required|string|max:255',
            'email'     => 'required|string|max:255|email|unique:users,email',
            'password'  => 'required|string|min:8'
        ]);
        $user = new User();
        $user->name         = $request->input('name');
        $user->email        = $request->input('email');
        $user->status       = $request->input('status');
        $user->role_id      = $request->input('role_id');
        $user->phone_number = $request->input('phone_number ');
        $user->password     = Hash::make($request->input('password'));
        $user->save();
        return (new VendorResource($user))->response()->setStatusCode(Response::HTTP_CREATED);
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return (new VendorResource($user))->response();
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
