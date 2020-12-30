<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Users\StoreUserRequest;
use App\Repositories\Interface\UserInterface;
use App\Http\Requests\Users\UpdateUserRequest;

class UserController extends Controller
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
        Gate::authorize('backend.users.index');

        //Access UserRepository delete function
        $users = $this->users->all();
        return view('backend.users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Define user authorize gate
        Gate::authorize('backend.users.create');

        //Access UserRepository allRole function
        $roles = $this->users->allRole();

        return view('backend.users.form', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreUserRequest $request)
    {
        //Access UserRepository store function
        $users = $this->users->store($request->all());

        notify()->success('User Successfully Added.', 'Added');

        return redirect()->route('backend.users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Access UserRepository store function
        $user = $this->users->get($id);

        return view('backend.users.show',compact('user'));
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
        Gate::authorize('backend.users.edit');

        //Access UserRepository allRole and get function
        $roles = $this->users->allRole();
        $user = $this->users->get($id);

        return view('backend.users.form', compact('roles','user'));
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
        //Access UserRepository update function
        $users = $this->users->update($id,$request->all());

        notify()->success('User Successfully Updated.', 'Updated');

        return redirect()->route('backend.users.index');
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
        Gate::authorize('backend.users.destroy');

        //Access UserRepository delete function
        $users = $this->users->delete($id);

        notify()->success("User Successfully Deleted", "Deleted");
        return back();
    }
}
