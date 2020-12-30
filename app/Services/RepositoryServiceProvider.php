<?php

namespace App\Services;

use Illuminate\Support\ServiceProvider;


class RepositoryServiceProvider extends ServiceProvider{

    public function register(){
        $this->app->bind(
            'App\Repositories\Interface\UserInterface',
            'App\Repositories\UserRepository'
        );

        $this->app->bind(
            'App\Repositories\Interface\RoleInterface',
            'App\Repositories\RoleRepository'
        );
    }
}