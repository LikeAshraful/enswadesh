<?php

namespace App\Repositories\User;
use Image;
use Storage;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Repositories\Interface\User\SuperAdminInterface;

class SuperAdminRepository implements SuperAdminInterface {

    public function all()
    {
        return User::get();
    }
    public function allRole()
    {
        return Role::get();
    }

    public function get($id)
    {
        return User::find($id);
    }

    public function store(array $data)
    {
        if($image = $data['image']) {
            $filename = rand(10, 100) . time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('/uploads/users/' . $filename);
            Image::make($image)->resize(400, 400)->save($location);
        }
        return User::create([
            'role_id'       => $data['role'],
            'name'          => $data['name'],
            'email'         => $data['email'],
            'phone_number'  => $data['phone_number'],
            'password'      => Hash::make($data['password']),
            'image'         => isset($filename) ? $filename : '',
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
                Image::make($image)->resize(400, 400)->save($locationc);
                $oldFilenamec = $user->image;
                $user->image = $image;
                Storage::delete('/uploads/users/' . $oldFilenamec);
            }
        }
        return $user->update([
            'role_id'       => $data['role'],
            'name'          => $data['name'],
            'email'         => $data['email'],
            'phone_number'  => $data['phone_number'],
            'password'      => Hash::make($data['password']),
            'image'         => isset($filename) ? $filename : $image,
        ]);
    }

    public function delete($id)
    {
        $user = User::find($id);
        $oldFilename = $user->image;
        Storage::delete('/uploads/users/' . $oldFilename);
        return $user->delete();
    }
}
