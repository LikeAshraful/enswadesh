<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\Roles\StoreRoleRequest;
use App\Http\Requests\Roles\UpdateRoleRequest;
use App\Repositories\Interface\Role\RoleInterface;

class RoleController extends Controller
{
    protected $roles;
    
    public function __construct(RoleInterface $roles)
    {
        $this->roles=$roles;

    }
    
    public function index()
    {
        Gate::authorize('backend.roles.index');
        $roles = $this->roles->all();
        return view('backend.roles.index',compact('roles'));
    }

    public function create()
    {
        Gate::authorize('backend.roles.create');
        $modules = $this->roles->allModules();
        return view('backend.roles.form',compact('modules'));
    }

    public function store(StoreRoleRequest $request)
    {
        $role = $this->roles->store($request->all());
        notify()->success('Role Successfully Added.', 'Added');
        return redirect()->route('backend.roles.index');
    }

    public function edit($id)
    {
        Gate::authorize('backend.roles.edit');
        $role = $this->roles->get($id);
        $modules = $this->roles->allModules();
        return view('backend.roles.form',compact('role','modules'));
    }

    public function update($id, UpdateRoleRequest $request)
    {
        $role = $this->roles->update($id,$request->all());
        notify()->success('Role Successfully Updated.', 'Updated');
        return redirect()->route('backend.roles.index');
    }

    public function destroy($id)
    {
        Gate::authorize('backend.roles.destroy');
        $role = $this->roles->delete($id);
        notify()->success("Role Successfully Deleted", "Deleted");
        return back();
    }
}