<?php

namespace Database\Seeders;

use App\Models\Module;
use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Dashboard
        $moduleAppDashboard = Module::updateOrCreate(['name' => 'Admin Dashboard']);
        Permission::updateOrCreate([
            'module_id' => $moduleAppDashboard->id,
            'name' => 'Access Dashboard',
            'slug' => 'backend.dashboard',
        ]);
        // Settings
        $moduleAppSettings = Module::updateOrCreate(['name' => 'Settings']);
        Permission::updateOrCreate([
            'module_id' => $moduleAppSettings->id,
            'name' => 'Access Settings',
            'slug' => 'backend.settings.index',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppSettings->id,
            'name' => 'Update Settings',
            'slug' => 'backend.settings.update',
        ]);

        // Role management
        $moduleAppRole = Module::updateOrCreate(['name' => 'Role Management']);
        Permission::updateOrCreate([
            'module_id' => $moduleAppRole->id,
            'name' => 'Access Roles',
            'slug' => 'backend.roles.index',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppRole->id,
            'name' => 'Create Role',
            'slug' => 'backend.roles.create',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppRole->id,
            'name' => 'Edit Role',
            'slug' => 'backend.roles.edit',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppRole->id,
            'name' => 'Delete Role',
            'slug' => 'backend.roles.destroy',
        ]);

        // Profile
        $moduleAppProfile = Module::updateOrCreate(['name' => 'Profile']);
        Permission::updateOrCreate([
            'module_id' => $moduleAppProfile->id,
            'name' => 'Update Profile',
            'slug' => 'backend.profile.update',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppProfile->id,
            'name' => 'Update Password',
            'slug' => 'backend.profile.password',
        ]);

        // User management(Super Admin)
        $moduleAppSuperAdmin = Module::updateOrCreate(['name' => 'Super Admin Management']);
        Permission::updateOrCreate([
            'module_id' => $moduleAppSuperAdmin->id,
            'name' => 'Access Super',
            'slug' => 'backend.super_admin.index',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppSuperAdmin->id,
            'name' => 'Create Super',
            'slug' => 'backend.super_admin.create',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppSuperAdmin->id,
            'name' => 'Edit Super',
            'slug' => 'backend.super_admin.edit',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppSuperAdmin->id,
            'name' => 'Delete Super',
            'slug' => 'backend.super_admin.destroy',
        ]);

        // User management(Admin)
        $moduleAppAdmin = Module::updateOrCreate(['name' => 'Admin Management']);
        Permission::updateOrCreate([
            'module_id' => $moduleAppAdmin->id,
            'name' => 'Access Admin',
            'slug' => 'backend.admin.index',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppAdmin->id,
            'name' => 'Create Admin',
            'slug' => 'backend.admin.create',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppAdmin->id,
            'name' => 'Edit Admin',
            'slug' => 'backend.admin.edit',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppAdmin->id,
            'name' => 'Delete Admin',
            'slug' => 'backend.admin.destroy',
        ]);

        // Product Property management(Category)
        $moduleAppUser = Module::updateOrCreate(['name' => 'Product Property Management(Category)']);
        Permission::updateOrCreate([
            'module_id' => $moduleAppUser->id,
            'name' => 'Access Category',
            'slug' => 'backend.category.index',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppUser->id,
            'name' => 'Create Category',
            'slug' => 'backend.categoryrs.create',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppUser->id,
            'name' => 'Edit Category',
            'slug' => 'backend.category.edit',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppUser->id,
            'name' => 'Delete Category',
            'slug' => 'backend.category.destroy',
        ]);

        // Product Property management(Brand)
        $moduleAppUser = Module::updateOrCreate(['name' => 'Product Property Management(Brand)']);
        Permission::updateOrCreate([
            'module_id' => $moduleAppUser->id,
            'name' => 'Access Brand',
            'slug' => 'backend.brand.index',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppUser->id,
            'name' => 'Create Brand',
            'slug' => 'backend.brand.create',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppUser->id,
            'name' => 'Edit Brand',
            'slug' => 'backend.brand.edit',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppUser->id,
            'name' => 'Delete Brand',
            'slug' => 'backend.brand.destroy',
        ]);

        // Shop Property Management(Cities)
        $moduleAppUser = Module::updateOrCreate(['name' => 'Shop Property Management(Cities)']);
        Permission::updateOrCreate([
            'module_id' => $moduleAppUser->id,
            'name' => 'Access City',
            'slug' => 'backend.cities.index',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppUser->id,
            'name' => 'Create City',
            'slug' => 'backend.cities.create',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppUser->id,
            'name' => 'Edit City',
            'slug' => 'backend.cities.edit',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppUser->id,
            'name' => 'Delete City',
            'slug' => 'backend.cities.destroy',
        ]);

        // Shop Property Management(Area)
        $moduleAppUser = Module::updateOrCreate(['name' => 'Shop Property Management(Area)']);
        Permission::updateOrCreate([
            'module_id' => $moduleAppUser->id,
            'name' => 'Access Area',
            'slug' => 'backend.areas.index',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppUser->id,
            'name' => 'Create Area',
            'slug' => 'backend.areas.create',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppUser->id,
            'name' => 'Edit Area',
            'slug' => 'backend.areas.edit',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppUser->id,
            'name' => 'Delete Area',
            'slug' => 'backend.areas.destroy',
        ]);

    }
}
