<?php

namespace App\Http\Controllers\Backend\UserManagement;
use Illuminate\Http\Request;
use Repository\User\UserRepository;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Users\StoreUserRequest;
use App\Http\Requests\Users\UpdateUserRequest;

class AdminController extends Controller
{
    protected $adminRepo;
    
    public function __construct(UserRepository $admin)
    {
        $this->adminRepo=$admin;
    }

    public function index()
    {
        Gate::authorize('backend.admin.index');
        $users = $this->adminRepo->getAll();
        return view('backend.user_management.admin.index',compact('users'));
    }

    public function create()
    {
        Gate::authorize('backend.admin.create');
        $roles = $this->adminRepo->allRoleForAdmin();
        return view('backend.user_management.admin.form', compact('roles'));
    }

    public function store(StoreUserRequest $request)
    {
        Gate::authorize('backend.admin.create');
        $image = $request->hasFile('image') ? $this->adminRepo->storeFile($request->file('image')) : null;
        $user = $this->adminRepo->create($request->except('image','role_id','password') + [
            'image'     =>  $image,
            'role_id'   =>  $request->role,
            'password'  => Hash::make($request->password),
        ]);
        notify()->success('User Successfully Added.', 'Added');
        return redirect()->route('backend.admin.index');
    }

    public function show($id)
    {
        $user = $this->adminRepo->findByID($id);
        return view('backend.user_management.admin.show',compact('user'));
    }

    public function edit($id)
    {
        Gate::authorize('backend.admin.edit');
        $roles = $this->adminRepo->allRoleForAdmin();
        $user = $this->adminRepo->findByID($id);
        return view('backend.user_management.admin.form', compact('roles','user'));
    }

    public function update($id, UpdateUserRequest $request)
    {
        $user       = $this->adminRepo->findByID($id);
        $userImage  = $request->hasFile('image');
        $image      = $userImage ? $this->adminRepo->storeFile($request->file('image')) : $user->image;
        if($userImage)
        {
            $this->adminRepo->updateFile($id);
        }
        $user  = $this->adminRepo->updateByID($id,$request->except('image','role_id','password') + [
            'image'     => $image,
            'role_id'   =>  $request->role,
            'password'  => Hash::make($request->password),
        ]);
        notify()->success('User Successfully Updated.', 'Updated');
        return redirect()->route('backend.admin.index');
    }

    public function destroy($id)
    {
        Gate::authorize('backend.admin.destroy');
        $user = $this->adminRepo->deleteByID($id);
        notify()->success("User Successfully Deleted", "Deleted");
        return back(); 
    }

}
