<?php

namespace App\Http\Controllers\Backend\UserManagement;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\Users\StoreUserRequest;
use App\Http\Requests\Users\UpdateUserRequest;
use App\Repositories\Interface\User\SuperAdminInterface;

class SuperAdminController extends Controller
{
    protected $users;
    
    public function __construct(SuperAdminInterface $users)
    {
        $this->users=$users;

    }

    public function index()
    {
        Gate::authorize('backend.super-admin.index');
        $users = $this->users->all();
        return view('backend.user_management.super_admin.index',compact('users'));
    }

    public function create()
    {
        Gate::authorize('backend.super-admin.create');
        $roles = $this->users->allRole();
        return view('backend.user_management.super_admin.form', compact('roles'));
    }

    public function store(StoreUserRequest $request)
    {
        Gate::authorize('backend.super-admin.create');
        $users = $this->users->store($request->all());
        notify()->success('User Successfully Added.', 'Added');
        return redirect()->route('backend.super-admin.index');
    }

    public function show($id)
    {
        $user = $this->users->get($id);
        return view('backend.user_management.super_admin.show',compact('user'));
    }

    public function edit($id)
    {
        Gate::authorize('backend.super-admin.edit');
        $roles = $this->users->allRole();
        $user = $this->users->get($id);
        return view('backend.user_management.super_admin.form', compact('roles','user'));
    }

    public function update($id, UpdateUserRequest $request)
    {
        Gate::authorize('backend.super-admin.edit');
        $users = $this->users->update($id,$request->all());
        notify()->success('User Successfully Updated.', 'Updated');
        return redirect()->route('backend.super-admin.index');
    }

    public function destroy($id)
    {
        Gate::authorize('backend.super-admin.destroy');
        $users = $this->users->delete($id);
        notify()->success("User Successfully Deleted", "Deleted");
        return back();
    }

    public function togglePublish($id)
    {
        try {
            $publish = User::find($id);

            if ($publish->status === 1) {
                $publish->status = 0;
                $message = 'User Publish Successfully';
            } else {
                $publish->status = 1;
                $message = 'User Unpublish Successfully';
            }

            $publish->save();

        } catch (\Exception $exception) {
            $message = $exception->getMessage();
        }
        notify()->success($message);
        return redirect()->route('backend.super-admin.index');
    }
    public function toggleBlock($id)
    {
        try {
            $blocked = User::find($id);
            
            if ($blocked->suspend === 1) {
                $blocked->suspend = 0;
                $message = 'User Blocked Successfully';
            } else {
                $blocked->suspend = 1;
                $message = 'User Unblocked Successfully';
            }
            $blocked->save();

        } catch (\Exception $exception) {
            $message = $exception->getMessage();
        }
        notify()->success($message);
        return redirect()->route('backend.super-admin.index');
    }
}
