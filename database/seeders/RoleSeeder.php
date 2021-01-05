<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin_permissions = Permission::all();
        Role::updateOrCreate(['name' => 'Admin', 'slug' => 'admin', 'deletable' => false])
            ->permissions()
            ->sync($admin_permissions->pluck('id'));

        Role::updateOrCreate(['name' => 'Shop Owner', 'slug' => 'shop_owner', 'deletable' => false]);
        
        Role::updateOrCreate(['name' => 'Customer', 'slug' => 'customer', 'deletable' => false]);

    }
}