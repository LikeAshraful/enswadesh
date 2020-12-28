<?php

namespace App\Services;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvide extends ServiceProvider{
    public function boot() {}
    
    public function register(){
        $this->app->bind(
            'App\Repositories\Interface\CommonInterface',
            'App\Repositories\UserRepository'
        );
    }
}