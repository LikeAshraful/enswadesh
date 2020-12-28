<?php
  
namespace App\Repositories\Interface;

interface CommonInterface{
    public function all();

    public function get($id);

    public function allRole();

    public function store(array $data);

    public function update($id, array $data);

    public function delete($id);
}