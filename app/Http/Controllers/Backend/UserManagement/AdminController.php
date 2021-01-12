<?php

namespace App\Http\Controllers\Backend\UserManagement;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Image;

class AdminController extends Controller
{
    public function index()
    {
        Gate::authorize('backend.admin.index');
        $users = User::whereNotIn('id', [1])->get();
        return view('backend.user_management.admin.index',compact('users'));
    }

    public function create()
    {
        Gate::authorize('backend.admin.create');
        $roles = Role::where('slug','!=','super_admin')->get();
        return view('backend.user_management.admin.form', compact('roles'));
    }

    public function store(Reguest $request)
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
        return redirect()->route('backend.admin.index');
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
  
        return view('backend.user_management.admin.show',compact('user'));
    }

    public function edit($id)
    {
        Gate::authorize('backend.admin.edit');
        $user = User::findOrFail($id);
        $roles = Role::where('slug','!=','super_admin')->get();
        return view('backend.user_management.admin.form', compact('roles','user'));
    }

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

    public function destroy($id)
    {
        Gate::authorize('backend.admin.destroy');
        $user=User::findOrFail($id);
        $oldFilename = $user->image;
        Storage::delete('/uploads/users/' . $oldFilename);
        $user->delete();
        notify()->success("User Successfully Deleted", "Deleted");
        return back(); 
    }
}
