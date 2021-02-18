<?php

namespace Repository\Role;

use App\Models\Role;
use App\Models\User;
use Repository\BaseRepository;

class RoleRepository extends BaseRepository {

    public function model()
    {
        return Role::class;
    }

    public function getAllVendors()
    {
        $roles = Role::where('slug', '=', 'vendor')->first();
        return User::where('role_id', $roles->id)->get();
    }

    public function getAllRoleForAdmin()
    {
        return $this->model()::where('slug', '!=', 'super_admin')->get();
    }

    public function getAllRoleForVendor()
    {
        return $this->model()::where('slug', '=', 'staff')->first();
    }

    public function getAllRoleForCustomer()
    {
        return $this->model()::where('slug', '=', 'customer')->first();
    }

    public function updateByID($id, array $modelData)
    {
        $model = $this->findOrFailByID($id);
        return $model->updateOrCreate($modelData);
    }

    public function deleteRole($id)
    {
        $role = $this->findByID($id);
        $role->delete();
    }
}