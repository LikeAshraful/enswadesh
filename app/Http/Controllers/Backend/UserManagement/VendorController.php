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
    public function index()
    {
        Gate::authorize('backend.vendor.index');
        $roles = Role::where('slug','=','staff')->first();
        $users = User::where('role_id',$roles->id)->get();
        return view('backend.user_management.vendor.index',compact('users'));
    }

    public function create()
    {
        Gate::authorize('backend.vendor.create');
        $role = Role::where('slug','=','staff')->first();
        return view('backend.user_management.vendor.form', compact('role'));
    }

    public function store(Request $request)
    {
        if($image = $request['image']) {
            $filename = rand(10, 100) . time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('/uploads/users/' . $filename);
            Image::make($image)->resize(400, 400)->save($location);
        }
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

    public function show($id)
    {
        
    }

    public function edit($id)
    {
        
    }

    public function update(Request $request, $id)
    {
        
    }

    public function destroy($id)
    {
        Gate::authorize('backend.vendor.destroy');
        $user=User::findOrFail($id);
        $oldFilename = $user->image;
        Storage::delete('/uploads/users/' . $oldFilename);
        $user->delete();
        notify()->success("User Successfully Deleted", "Deleted");
        return back(); 
    }
}
