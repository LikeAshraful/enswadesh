<?php

namespace Repository\Role;
use App\Models\Role;
use App\Models\Module;
use Repository\BaseRepository;

class RoleRepository extends BaseRepository {

    public function model()
    {
        return Role::class;
    }

    public function allModules()
    {
        return Module::get();
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