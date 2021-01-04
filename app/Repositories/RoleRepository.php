<?php

namespace App\Repositories;
use App\Models\Role;
use App\Models\User;
use App\Models\Module;
use Illuminate\Support\Str;
use App\Repositories\Interface\RoleInterface;

class RoleRepository implements RoleInterface {
    
    public function all()
    {
        //Return Role Model
        return Role::get();
    }
    public function allModules()
    {
        //Return Module
        return Module::get();
    }
    public function get($id)
    {
        //Return User Model
        return Role::find($id);
    }

    public function store(array $data)
    {
        $slug = Str::slug($data['name'], '_');
        //Return Role Model
        return Role::create([
            'name'      => $data['name'],
            'slug'      => $slug
        ])->permissions()->sync($data['permissions']);
    }

    public function update($id, array $data)
    {
        $role = Role::find($id);
        
        $role = Str::slug($role['name'], '_');

        //Return Role Model
        return Role::updateOrCreate([
            'name'      => $data['name'],
            'slug'      => $role     
        ])->permissions()->sync($data['permissions']);
    }

    public function delete($id)
    {
        //Return User Model
        $role = Role::find($id);
        return $role->delete();
    }
}
