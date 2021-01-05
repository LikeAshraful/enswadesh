<?php

namespace App\Services;

use Illuminate\Support\ServiceProvider;


class RepositoryServiceProvider extends ServiceProvider{

    public function register(){
        //User Management
        $this->app->bind(
            'App\Repositories\Interface\User\UserInterface',
            'App\Repositories\User\UserRepository'
        );
        //Role Management
        $this->app->bind(
            'App\Repositories\Interface\Role\RoleInterface',
            'App\Repositories\Role\RoleRepository'
        );
        //Category Management
        $this->app->bind(
            'App\Repositories\Interface\Category\CategoryInterface',
            'App\Repositories\Category\CategoryRepository'
        );
        //Brand Management
        $this->app->bind(
            'App\Repositories\Interface\Brand\BrandInterface',
            'App\Repositories\Brand\BrandRepository'
        );
    }
}