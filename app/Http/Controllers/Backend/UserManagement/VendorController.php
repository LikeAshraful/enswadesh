<?php

namespace App\Http\Controllers\Backend\UserManagement;

use App\Models\Role;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Image;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Define Vendor authorize gate
        Gate::authorize('backend.vendor.index');

        //Retrive Role model with Staff slug
        $roles = Role::where('slug','=','staff')->first();

        //Retrive User model excepted Super admin, Admin and Manager
        $users = User::where('role_id',$roles->id)->get();

        return view('backend.user_management.vendor.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Define Vendor authorize gate
        Gate::authorize('backend.vendor.create');
        
        //Retrive User model excepted Super admin, Admin and Manager
        $role = Role::where('slug','=','staff')->first();

        return view('backend.user_management.vendor.form', compact('role'));
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

        return redirect()->route('backend.vendor.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Define user authorize gate
        Gate::authorize('backend.vendor.destroy');

        $user=User::findOrFail($id);
        $oldFilename = $user->image;
        Storage::delete('/uploads/users/' . $oldFilename);
        $user->delete();

        notify()->success("User Successfully Deleted", "Deleted");
        
        return back(); 
    }
}
