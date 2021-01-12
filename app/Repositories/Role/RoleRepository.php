<?php

namespace App\Repositories\Role;
use App\Models\Role;
use App\Models\User;
use App\Models\Module;
use Illuminate\Support\Str;
use App\Repositories\Interface\Role\RoleInterface;

class RoleRepository implements RoleInterface {
    
    public function all()
    {
        return Role::get();
    }
    public function allModules()
    {
        return Module::get();
    }
    public function get($id)
    {
        return Role::find($id);
    }

    public function store(array $data)
    {
        $slug = Str::slug($data['name'], '_');
        return Role::create([
            'name'      => $data['name'],
            'slug'      => $slug
        ])->permissions()->sync($data['permissions']);
    }

    public function update($id, array $data)
    {
        $role = Role::find($id);
        $role = Str::slug($role['name'], '_');
        return Role::updateOrCreate([
            'name'      => $data['name'],
            'slug'      => $role     
        ])->permissions()->sync($data['permissions']);
    }

    public function delete($id)
    {
        $role = Role::find($id);
        return $role->delete();
    }
}
