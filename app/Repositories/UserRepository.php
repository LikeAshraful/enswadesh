<?php

namespace App\Repositories;
use Image;
use Storage;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Repositories\Interface\UserInterface;

class UserRepository implements UserInterface {

    public function all()
    {
        //Return User Model
        return User::get();
    }
    public function allRole()
    {
        //Return Role Model
        return Role::get();
    }

    public function get($id)
    {
        //Return User Model
        return User::find($id);
    }

    public function store(array $data)
    {
        if($image = $data['image']) {
            $filename = rand(10, 100) . time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('/uploads/users/' . $filename);
            Image::make($image)->resize(600, 400)->save($location);
        }

        //Return User Model
        return User::create([
            'role_id'   => $data['role'],
            'name'      => $data['name'],
            'email'     => $data['email'],
            'password'  => Hash::make($data['password']),
            'image'     => isset($filename) ? $filename : '',
            'status'    => isset($data['status']) == true ? 1 : 0,
        ]);
    }

    public function update($id, array $data)
    {
        $user = User::find($id);
        $image = $user->image;

        if(isset($data['image']) == true){
            if (!empty($image = $data['image'])) {
                $filename = rand(10, 100) . time() . '.' . $image->getClientOriginalExtension();
                $locationc = public_path('/uploads/users/' . $filename);
                Image::make($image)->resize(600, 400)->save($locationc);
                $oldFilenamec = $user->image;
                $user->image = $image;
                Storage::delete('/uploads/users/' . $oldFilenamec);
            }
        }
        //Return User Model
        return $user->update([
            'role_id'   => $data['role'],
            'name'      => $data['name'],
            'email'     => $data['email'],
            'password'  => Hash::make($data['password']),
            'image'     => isset($filename) ? $filename : $image,
            'status'    => isset($data['status']) == true ? 1 : 0,
        ]);
    }

    public function delete($id)
    {
        //Return User Model
        $user = User::find($id);
        $oldFilename = $user->image;
        Storage::delete('/uploads/users/' . $oldFilename);
        return $user->delete();
    }
}
