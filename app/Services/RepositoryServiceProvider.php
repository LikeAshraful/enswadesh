<?php

namespace App\Services;

use Illuminate\Support\ServiceProvider;


class RepositoryServiceProvider extends ServiceProvider{

    public function register(){
        //Super Admin Management
        $this->app->bind(
            'App\Repositories\Interface\User\SuperAdminInterface',
            'App\Repositories\User\SuperAdminRepository'
        );
        //Admin Management
        $this->app->bind(
            'App\Repositories\Interface\User\AdminInterface',
            'App\Repositories\User\AdminRepository'
        );
        //Vendor Management
        $this->app->bind(
            'App\Repositories\Interface\User\VendorInterface',
            'App\Repositories\User\VendorRepository'
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