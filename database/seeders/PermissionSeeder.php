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
        // User management(Super Admin)
        $moduleAppSuperAdmin = Module::updateOrCreate(['name' => 'Super Admin Management']);
        Permission::updateOrCreate([
            'module_id' => $moduleAppSuperAdmin->id,
            'name' => 'Access Super',
            'slug' => 'backend.super-admin.index',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppSuperAdmin->id,
            'name' => 'Create Super',
            'slug' => 'backend.super-admin.create',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppSuperAdmin->id,
            'name' => 'Edit Super',
            'slug' => 'backend.super-admin.edit',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppSuperAdmin->id,
            'name' => 'Delete Super',
            'slug' => 'backend.super-admin.destroy',
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

        // User management(Vendor)
        $moduleAppVendor = Module::updateOrCreate(['name' => 'Vendor Management']);
        Permission::updateOrCreate([
            'module_id' => $moduleAppVendor->id,
            'name' => 'Access Vendor',
            'slug' => 'backend.vendor.index',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppVendor->id,
            'name' => 'Create Vendor',
            'slug' => 'backend.vendor.create',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppVendor->id,
            'name' => 'Edit Vendor',
            'slug' => 'backend.vendor.edit',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppVendor->id,
            'name' => 'Delete Vendor',
            'slug' => 'backend.vendor.destroy',
        ]);
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
        // Product Property management(Category)
        $moduleAppCategory = Module::updateOrCreate(['name' => 'Product Property Management(Category)']);
        Permission::updateOrCreate([
            'module_id' => $moduleAppCategory->id,
            'name' => 'Access Category',
            'slug' => 'backend.category.index',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppCategory->id,
            'name' => 'Create Category',
            'slug' => 'backend.category.create',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppCategory->id,
            'name' => 'Edit Category',
            'slug' => 'backend.category.edit',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppCategory->id,
            'name' => 'Delete Category',
            'slug' => 'backend.category.destroy',
        ]);

        // Product Property management(Brand)
        $moduleAppBrand = Module::updateOrCreate(['name' => 'Product Property Management(Brand)']);
        Permission::updateOrCreate([
            'module_id' => $moduleAppBrand->id,
            'name' => 'Access Brand',
            'slug' => 'backend.brand.index',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppBrand->id,
            'name' => 'Create Brand',
            'slug' => 'backend.brand.create',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppBrand->id,
            'name' => 'Edit Brand',
            'slug' => 'backend.brand.edit',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppBrand->id,
            'name' => 'Delete Brand',
            'slug' => 'backend.brand.destroy',
        ]);

        // Shop Property Management(Cities)
        $moduleAppCity = Module::updateOrCreate(['name' => 'Shop Property Management(Cities)']);
        Permission::updateOrCreate([
            'module_id' => $moduleAppCity->id,
            'name' => 'Access City',
            'slug' => 'backend.cities.index',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppCity->id,
            'name' => 'Create City',
            'slug' => 'backend.cities.create',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppCity->id,
            'name' => 'Edit City',
            'slug' => 'backend.cities.edit',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppCity->id,
            'name' => 'Delete City',
            'slug' => 'backend.cities.destroy',
        ]);

        // Shop Property Management(Area)
        $moduleAppArea = Module::updateOrCreate(['name' => 'Shop Property Management(Area)']);
        Permission::updateOrCreate([
            'module_id' => $moduleAppArea->id,
            'name' => 'Access Area',
            'slug' => 'backend.areas.index',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppArea->id,
            'name' => 'Create Area',
            'slug' => 'backend.areas.create',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppArea->id,
            'name' => 'Edit Area',
            'slug' => 'backend.areas.edit',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppArea->id,
            'name' => 'Delete Area',
            'slug' => 'backend.areas.destroy',
        ]);

        // Shop Property Management(menu)
        $moduleAppMenu = Module::updateOrCreate(['name' => 'Shop Property Management(Menu)']);
        Permission::updateOrCreate([
            'module_id' => $moduleAppMenu->id,
            'name' => 'Access Menu',
            'slug' => 'backend.menus.index',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppMenu->id,
            'name' => 'Create Menu',
            'slug' => 'backend.menus.create',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppMenu->id,
            'name' => 'Edit Menu',
            'slug' => 'backend.menus.edit',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppMenu->id,
            'name' => 'Delete Menu',
            'slug' => 'backend.menus.destroy',
        ]);

        // Shop Property Management(market)
        $moduleAppMarket = Module::updateOrCreate(['name' => 'Shop Property Management(Market)']);
        Permission::updateOrCreate([
            'module_id' => $moduleAppMarket->id,
            'name' => 'Access Market',
            'slug' => 'backend.markets.index',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppMarket->id,
            'name' => 'Create Market',
            'slug' => 'backend.markets.create',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppMarket->id,
            'name' => 'Edit Market',
            'slug' => 'backend.markets.edit',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppMarket->id,
            'name' => 'Delete Market',
            'slug' => 'backend.markets.destroy',
        ]);

        // Shop Property Management(shop type)
        $moduleAppShopType = Module::updateOrCreate(['name' => 'Shop Property Management(Shop Type)']);
        Permission::updateOrCreate([
            'module_id' => $moduleAppShopType->id,
            'name' => 'Access Shop Type',
            'slug' => 'backend.shoptypes.index',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppShopType->id,
            'name' => 'Create Shop Type',
            'slug' => 'backend.shoptypes.create',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppShopType->id,
            'name' => 'Edit Shop Type',
            'slug' => 'backend.shoptypes.edit',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppShopType->id,
            'name' => 'Delete Shop Type',
            'slug' => 'backend.shoptypes.destroy',
        ]);

        // Shop Property Management(shop)
        $moduleAppShop = Module::updateOrCreate(['name' => 'Shop Property Management(Shop)']);
        Permission::updateOrCreate([
            'module_id' => $moduleAppShop->id,
            'name' => 'Access Shop',
            'slug' => 'backend.shops.index',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppShop->id,
            'name' => 'Create Shop',
            'slug' => 'backend.shops.create',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppShop->id,
            'name' => 'Edit Shop',
            'slug' => 'backend.shops.edit',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppShop->id,
            'name' => 'Delete Shop',
            'slug' => 'backend.shops.destroy',
        ]);

        // Product Property Management(color)
        $moduleAppColor = Module::updateOrCreate(['name' => 'Product Property Management(Color)']);
        Permission::updateOrCreate([
            'module_id' => $moduleAppColor->id,
            'name' => 'Access Colors',
            'slug' => 'backend.colors.index',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppColor->id,
            'name' => 'Create Colors',
            'slug' => 'backend.colors.create',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppColor->id,
            'name' => 'Edit Colors',
            'slug' => 'backend.colors.edit',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppColor->id,
            'name' => 'Delete Colors',
            'slug' => 'backend.colors.destroy',
        ]);

        // Product Property Management(size)
        $moduleAppSize = Module::updateOrCreate(['name' => 'Product Property Management(Size)']);
        Permission::updateOrCreate([
            'module_id' => $moduleAppSize->id,
            'name' => 'Access Size',
            'slug' => 'backend.size.index',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppSize->id,
            'name' => 'Create Size',
            'slug' => 'backend.size.create',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppSize->id,
            'name' => 'Edit Size',
            'slug' => 'backend.size.edit',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppSize->id,
            'name' => 'Delete Size',
            'slug' => 'backend.size.destroy',
        ]);

        // Product Property Management(weight)
        $moduleAppWeight = Module::updateOrCreate(['name' => 'Product Property Management(Weight)']);
        Permission::updateOrCreate([
            'module_id' => $moduleAppWeight->id,
            'name' => 'Access Weights',
            'slug' => 'backend.weights.index',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppWeight->id,
            'name' => 'Create Weights',
            'slug' => 'backend.weights.create',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppWeight->id,
            'name' => 'Edit Weights',
            'slug' => 'backend.weights.edit',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppWeight->id,
            'name' => 'Delete Weights',
            'slug' => 'backend.weights.destroy',
        ]);

        // Product Property Management(product)
        $moduleAppProduct = Module::updateOrCreate(['name' => 'Product Property Management(Product)']);
        Permission::updateOrCreate([
            'module_id' => $moduleAppProduct->id,
            'name' => 'Access Products',
            'slug' => 'backend.products.index',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppProduct->id,
            'name' => 'Create Products',
            'slug' => 'backend.products.create',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppProduct->id,
            'name' => 'Edit Products',
            'slug' => 'backend.products.edit',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppProduct->id,
            'name' => 'Delete Products',
            'slug' => 'backend.products.destroy',
        ]);

        // Order Management(order)
        $moduleAppOrder = Module::updateOrCreate(['name' => 'Order Management(Order)']);
        Permission::updateOrCreate([
            'module_id' => $moduleAppOrder->id,
            'name' => 'Access Order',
            'slug' => 'backend.orders.index',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppOrder->id,
            'name' => 'Create Order',
            'slug' => 'backend.orders.create',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppOrder->id,
            'name' => 'Edit Order',
            'slug' => 'backend.orders.edit',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppOrder->id,
            'name' => 'Delete Order',
            'slug' => 'backend.orders.destroy',
        ]);
    }
}
