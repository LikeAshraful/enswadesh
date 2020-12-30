<?php
  
namespace App\Repositories\Interface;

interface RoleInterface{
    public function all();

    public function get($id);

    public function allModules();

    public function store(array $data);

    public function update($id, array $data);

    public function delete($id);
}