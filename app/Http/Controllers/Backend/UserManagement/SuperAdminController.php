<?php

namespace App\Http\Controllers\Backend\UserManagement;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\Users\StoreUserRequest;
use App\Http\Requests\Users\UpdateUserRequest;
use App\Repositories\Interface\User\UserInterface;

class SuperAdminController extends Controller
{
    protected $users;
    
    public function __construct(UserInterface $users)
    {
        $this->users=$users;

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Define user authorize gate
        Gate::authorize('backend.super_admin.index');

        //Access UserInterface all function
        $users = $this->users->all();
        return view('backend.user_management.super_admin.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Define user authorize gate
        Gate::authorize('backend.super_admin.create');

        //Access UserInterface allRole function
        $roles = $this->users->allRole();

        return view('backend.user_management.super_admin.form', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {

        //Access UserInterface store function
        $users = $this->users->store($request->all());

        notify()->success('User Successfully Added.', 'Added');

        return redirect()->route('backend.super_admin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Access UserInterface store function
        $user = $this->users->get($id);

        return view('backend.user_management.super_admin.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Define user authorize gate
        Gate::authorize('backend.super_admin.edit');

        //Access UserInterface allRole and get function
        $roles = $this->users->allRole();
        $user = $this->users->get($id);

        return view('backend.user_management.super_admin.form', compact('roles','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update($id, UpdateUserRequest $request)
    {
        //Access UserInterface update function
        $users = $this->users->update($id,$request->all());

        notify()->success('User Successfully Updated.', 'Updated');

        return redirect()->route('backend.super_admin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Define user authorize gate
        Gate::authorize('backend.super_admin.destroy');

        //Access UserRepository delete function
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
        return redirect()->route('backend.super_admin.index');
    }
    public function toggleBlocked($id)
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
        return redirect()->route('backend.super_admin.index');
    }
}
