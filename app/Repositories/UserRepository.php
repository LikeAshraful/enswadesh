<?php

namespace App\Repositories;
use App\Models\User;
use App\Repositories\Interface\UserInterface;

class UserRepository implements UserInterface {

    public function all(){
        return User::get();
    }
    public function get($id){
        return User::find($id);
    }

    // public function store(array $data);

    // public function update($id, array $data);

    // public function delete($id);
}
