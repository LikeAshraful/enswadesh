<?php

namespace App\Http\Controllers\Backend\UserManagement;

use Illuminate\Http\Request;
use Repository\User\UserRepository;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Users\StoreUserRequest;
use App\Http\Requests\Users\UpdateUserRequest;

class VendorController extends Controller
{
    protected $vendorRepo;
    
    public function __construct(UserRepository $vendor)
    {
        $this->vendorRepo=$vendor;
    }

    public function index()
    {
        Gate::authorize('backend.vendor.index');
        $users = $this->vendorRepo->getAll();
        return view('backend.user_management.vendor.index',compact('users'));
    }

    public function create()
    {
        Gate::authorize('backend.vendor.create');
        $role = $this->vendorRepo->allRoleForVendor();
        return view('backend.user_management.vendor.form', compact('role'));
    }

    public function store(StoreUserRequest $request)
    {
        $user = $this->vendorRepo->create($request->except('role_id','password') + [
            'role_id'   =>  $request->role,
            'password'  => Hash::make($request->password),
        ]);
        notify()->success('User Successfully Added.', 'Added');
        return redirect()->route('backend.vendor.index');
    }

    public function show($id)
    {
        $user = $this->vendorRepo->findByID($id);
        return view('backend.user_management.vendor.show',compact('user'));   
    }

    public function edit($id)
    {
        Gate::authorize('backend.vendor.edit');
        $role   = $this->vendorRepo->allRoleForVendor();
        $user   = $this->vendorRepo->findByID($id);  
        return view('backend.user_management.vendor.form', compact('role','user')); 
    }

    public function update($id, UpdateUserRequest $request)
    {
        $user       = $this->vendorRepo->findByID($id);
        $user  = $this->vendorRepo->updateByID($id,$request->except('role_id','password') + [
            'role_id'   =>  $request->role,
            'password'  => Hash::make($request->password),
        ]);
        notify()->success('User Successfully Updated.', 'Updated');
        return redirect()->route('backend.vendor.index');
    }

    public function destroy($id)
    {
        Gate::authorize('backend.vendor.destroy');
        $user = $this->vendorRepo->deleteByID($id);
        notify()->success("User Successfully Deleted", "Deleted");
        return back(); 
    }

    public function toggleBlock($id)
    {
        $block = $this->vendorRepo->blockByID($id);
        return back();
    }
}
