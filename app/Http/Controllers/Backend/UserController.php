<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Users\StoreUserRequest;
use App\Http\Requests\Users\UpdateUserRequest;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use Image;
use Storage;
use Intervention\Image\ImageManager;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('backend.users.index');
        $users = User::all();
        return view('backend.users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('backend.users.create');
        $roles = Role::all();
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
        //Image
        if ($image = $request->file('image')) {
            $filename = rand(10, 100) . time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('/uploads/users/' . $filename);
            Image::make($image)->resize(600, 400)->save($location);
        }

        $user = User::create([
            'role_id'   => $request->role,
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => Hash::make($request->password),
            'image'     => $filename,
            'status'    => $request->filled('status'),
        ]);
        
        notify()->success('User Successfully Added.', 'Added');
        return redirect()->route('backend.users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('backend.users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        Gate::authorize('backend.users.edit');
        $roles = Role::all();
        return view('backend.users.form', compact('roles','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $user->update([
            'role_id'   => $request->role,
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => isset($request->password) ? Hash::make($request->password) : $user->password,
            'status'    => $request->filled('status'),
        ]);
        
        notify()->success('User Successfully Updated.', 'Updated');
        return redirect()->route('backend.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        Gate::authorize('backend.users.destroy');
        $user->delete();
        notify()->success("User Successfully Deleted", "Deleted");
        return back();
    }
}
