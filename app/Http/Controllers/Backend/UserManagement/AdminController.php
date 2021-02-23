<?php

namespace App\Http\Controllers\Backend\UserManagement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Repository\Role\RoleRepository;
use Repository\User\UserRepository;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Users\StoreUserRequest;
use App\Http\Requests\Users\UpdateUserRequest;

class AdminController extends Controller
{
    protected $adminRepo;
    protected $roleRepo;

    public function __construct(UserRepository $adminRepository, RoleRepository $roleRepository)
    {
        $this->adminRepo = $adminRepository;
        $this->roleRepo  = $roleRepository;
    }

    public function index()
    {
        Gate::authorize('backend.admin.index');
        $users = $this->adminRepo->getAllUsersForAdmin($this->roleRepo->getAllRoleForSuperAdmin()->id);
        return view('backend.user_management.admin.index',compact('users'));
    }

    public function create()
    {
        Gate::authorize('backend.admin.create');
        $roles = $this->roleRepo->getAllRoleForAdmin();
        return view('backend.user_management.admin.form', compact('roles'));
    }

    public function store(StoreUserRequest $request)
    {
        Gate::authorize('backend.admin.create');
        $user = DB::transaction(function () use ($request){
            $user = $this->adminRepo->create($request->except('role_id') + [
                'role_id'   =>  $request->role
            ]);
            $this->adminRepo->updateOrNewBy($user);
        });
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
        $roles  = $this->roleRepo->getAllRoleForAdmin();
        $user   = $this->adminRepo->findByID($id);
        return view('backend.user_management.admin.form', compact('roles','user'));
    }

    public function update($id, UpdateUserRequest $request)
    {
        $user = $this->adminRepo->findByID($id);
        $user  = $this->adminRepo->updateByID($id,$request->except('role_id') + [
            'role_id'   =>  $request->role
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