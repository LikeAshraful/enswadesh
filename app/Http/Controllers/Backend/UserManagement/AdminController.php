<?php

namespace App\Http\Controllers\Backend\UserManagement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Users\StoreUserRequest;
use App\Http\Requests\Users\UpdateUserRequest;
use App\Repositories\Interface\User\AdminInterface;

class AdminController extends Controller
{
    protected $admin;
    
    public function __construct(AdminInterface $admin)
    {
        $this->admin=$admin;
    }

    public function index()
    {
        Gate::authorize('backend.admin.index');
        $users = $this->admin->all();
        return view('backend.user_management.admin.index',compact('users'));
    }

    public function create()
    {
        Gate::authorize('backend.admin.create');
        $roles = $this->admin->allRole();
        return view('backend.user_management.admin.form', compact('roles'));
    }

    public function store(StoreUserRequest $request)
    {
        Gate::authorize('backend.admin.create');
        $user = $this->admin->store($request->all());
        notify()->success('User Successfully Added.', 'Added');
        return redirect()->route('backend.admin.index');
    }

    public function show($id)
    {
        $user = $this->admin->get($id);
        return view('backend.user_management.admin.show',compact('user'));
    }

    public function edit($id)
    {
        Gate::authorize('backend.admin.edit');
        $roles = $this->admin->allRole();
        $user = $this->admin->get($id);
        return view('backend.user_management.admin.form', compact('roles','user'));
    }

    public function update($id, UpdateUserRequest $request)
    {
        $users = $this->admin->update($id,$request->all());
        notify()->success('User Successfully Updated.', 'Updated');
        return redirect()->route('backend.admin.index');
    }

    public function destroy($id)
    {
        Gate::authorize('backend.admin.destroy');
        $user = $this->admin->delete($id);
        notify()->success("User Successfully Deleted", "Deleted");
        return back(); 
    }
}
