<?php

namespace App\Http\Controllers\Backend\UserManagement;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Intervention\Image\Image;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Define Admin authorize gate
        Gate::authorize('backend.admin.index');

        //Retrive Role model excepted Super admin 
        $users = User::where('name','!=','Super Admin')->get();
        
        return view('backend.user_management.admin.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Define Admin authorize gate
        Gate::authorize('backend.admin.create');

        //Retrive Role model excepted Super admin 
        $roles = Role::where('slug','!=','super_admin')->get();
        
        return view('backend.user_management.admin.form', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($image = $request['image']) {
            $filename = rand(10, 100) . time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('/uploads/users/' . $filename);
            Image::make($image)->resize(400, 400)->save($location);
        }

        //Return User Model
        return User::create([
            'role_id'       => $request['role'],
            'name'          => $request['name'],
            'email'         => $request['email'],
            'phone_number'  => $request['phone_number'],
            'password'      => Hash::make($request['password']),
            'image'         => isset($filename) ? $filename : '',
        ]);

        notify()->success('User Successfully Added.', 'Added');

        return redirect()->route('backend.admin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
  
        return view('backend.user_management.admin.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Define Admin authorize gate
        Gate::authorize('backend.admin.edit');

        //Retrive user from User model with id
        $user = User::findOrFail($id);

        //Retrive Role model excepted Super admin 
        $roles = Role::where('slug','!=','super_admin')->get();

        return view('backend.user_management.admin.form', compact('roles','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $image  = $user->image;

        if(isset($request['image']) == true){
            if (!empty($image = $request['image'])) {
                $filename = rand(10, 100) . time() . '.' . $image->getClientOriginalExtension();
                $locationc = public_path('/uploads/users/' . $filename);
                Image::make($image)->resize(400, 400)->save($locationc);
                $oldFilenamec = $user->image;
                $user->image = $image;
                Storage::delete('/uploads/users/' . $oldFilenamec);
            }
        }

        $user = $user->update([
            'role_id'       => $request['role'],
            'name'          => $request['name'],
            'email'         => $request['email'],
            'phone_number'  => $request['phone_number'],
            'password'      => Hash::make($request['password']),
            'image'         => isset($filename) ? $filename : $image,
        ]);
        
        notify()->success('User Successfully Updated.', 'Updated');

        return redirect()->route('backend.admin.index');
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
        Gate::authorize('backend.admin.destroy');

        $user=User::findOrFail($id);
        $oldFilename = $user->image;
        Storage::delete('/uploads/users/' . $oldFilename);
        $user->delete();
        notify()->success("User Successfully Deleted", "Deleted");
        return back(); 
    }
}
