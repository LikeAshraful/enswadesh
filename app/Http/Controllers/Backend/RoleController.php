<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Repository\Role\RoleRepository;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Repository\module\ModuleRepository;
use App\Http\Requests\Roles\StoreRoleRequest;
use App\Http\Requests\Roles\UpdateRoleRequest;

class RoleController extends Controller
{
    protected $roleRepo;
    protected $moduleRepo;

    public function __construct(RoleRepository $roleRepository, ModuleRepository $moduleRepository)
    {
        $this->roleRepo     =   $roleRepository;
        $this->moduleRepo   =   $moduleRepository;
    }

    public function index()
    {
        Gate::authorize('backend.roles.index');
        $roles = $this->roleRepo->getAll();
        return view('backend.roles.index',compact('roles'));
    }

    public function create()
    {
        Gate::authorize('backend.roles.create');
        $modules = $this->moduleRepo->getAll();
        return view('backend.roles.form',compact('modules'));
    }

    public function store(StoreRoleRequest $request)
    {
        $role = $this->roleRepo->create($request->all())->permissions()->sync($request['permissions']);
        notify()->success('Role Successfully Added.', 'Added');
        return redirect()->route('backend.roles.index');
    }

    public function edit($id)
    {
        Gate::authorize('backend.roles.edit');
        $role     = $this->roleRepo->findByID($id);
        $modules  = $this->moduleRepo->getAll();
        return view('backend.roles.form',compact('role','modules'));
    }

    public function update($id, UpdateRoleRequest $request)
    {
        $role = $this->roleRepo->updateByID($id,['name'=> $request['name']])->permissions()->sync($request['permissions']);
        notify()->success('Role Successfully Updated.', 'Updated');
        return redirect()->route('backend.roles.index');
    }

    public function destroy($id)
    {
        Gate::authorize('backend.roles.destroy');
        $role = $this->roleRepo->deleteRole($id);
        notify()->success("Role Successfully Deleted", "Deleted");
        return back();
    }
}