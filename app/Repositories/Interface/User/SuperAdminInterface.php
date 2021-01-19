<?php
  
namespace App\Repositories\Interface\User;

interface SuperAdminInterface{
    public function all();

    public function allVendor();

    public function get($id);

    public function allRole();

    public function store(array $data);

    public function update($id, array $data);

    public function delete($id); 
}