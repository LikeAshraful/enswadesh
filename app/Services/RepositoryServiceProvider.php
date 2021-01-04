<?php

namespace App\Services;

use Illuminate\Support\ServiceProvider;


class RepositoryServiceProvider extends ServiceProvider{

    public function register(){
        //User Management
        $this->app->bind(
            'App\Repositories\Interface\UserInterface',
            'App\Repositories\UserRepository'
        );
        //Role Management
        $this->app->bind(
            'App\Repositories\Interface\RoleInterface',
            'App\Repositories\RoleRepository'
        );
        //Category Management
        $this->app->bind(
            'App\Repositories\Interface\CategoryInterface',
            'App\Repositories\CategoryRepository'
        );
    }
}