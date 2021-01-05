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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Define Role authorize gate
        Gate::authorize('backend.roles.index');

        //Access RoleRepository allRole function
        $roles = $this->roles->all();

        return view('backend.roles.index',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Define Role authorize gate
        Gate::authorize('backend.roles.create');

        //Access RoleRepository allModules function
        $modules = $this->roles->allModules();

        return view('backend.roles.form',compact('modules'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRoleRequest $request)
    {
        //Access RoleRepository store function
        $role = $this->roles->store($request->all());
 
        notify()->success('Role Successfully Added.', 'Added');

        return redirect()->route('backend.roles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Define Role authorize gate
        Gate::authorize('backend.roles.edit');

        //Access RoleRepository get function
        $role = $this->roles->get($id);

        //Access RoleRepository allModules function
        $modules = $this->roles->allModules();

        return view('backend.roles.form',compact('role','modules'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update($id, UpdateRoleRequest $request)
    {
        //Access RoleRepository update function
        $role = $this->roles->update($id,$request->all());

        notify()->success('Role Successfully Updated.', 'Updated');
        return redirect()->route('backend.roles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Define Role authorize gate
        Gate::authorize('backend.roles.destroy');

        //Access RoleRepository update function
        $role = $this->roles->delete($id);
        
        notify()->success("Role Successfully Deleted", "Deleted");
        return back();
    }
}