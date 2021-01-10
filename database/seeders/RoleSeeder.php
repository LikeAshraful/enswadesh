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
        Role::updateOrCreate(['name' => 'Super Admin', 'slug' => 'super_admin', 'deletable' => false])
            ->permissions()
            ->sync($admin_permissions->pluck('id'));

        Role::updateOrCreate(['name' => 'Admin', 'slug' => 'admin', 'deletable' => false]);
        
        Role::updateOrCreate(['name' => 'Manager', 'slug' => 'manager', 'deletable' => false]);

        Role::updateOrCreate(['name' => 'Vendor', 'slug' => 'vendor', 'deletable' => false]);

        Role::updateOrCreate(['name' => 'Staff', 'slug' => 'staff', 'deletable' => false]);

        Role::updateOrCreate(['name' => 'Customer', 'slug' => 'customer', 'deletable' => false]);

    }
}