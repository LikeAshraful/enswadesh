<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create super admin
        $adminRole = Role::where('slug','super_admin')->first();
        User::updateOrCreate([
            'role_id'       => $adminRole->id,
            'name'          => 'Super Admin',
            'email'         => 'super@gmail.com',
            'password'      => '12345678',
            'phone_number'  => '01744101010',
            'status'        => true,
            'suspend'       => false
        ]);

        // Create admin
        $adminRole = Role::where('slug','admin')->first();
        User::updateOrCreate([
            'role_id'       => $adminRole->id,
            'name'          => 'Admin',
            'email'         => 'admin@gmail.com',
            'password'      => '12345678',
            'phone_number'  => '01744101011',
            'status'        => true,
            'suspend'       => false
        ]);
        // Create manager
        $adminRole = Role::where('slug','manager')->first();
        User::updateOrCreate([
            'role_id'       => $adminRole->id,
            'name'          => 'Manager',
            'email'         => 'manager@gmail.com',
            'password'      => '12345678',
            'phone_number'  => '01744101012',
            'status'        => true,
            'suspend'       => false
        ]);

        // Create Shop Owner
        $shopOwnerRole = Role::where('slug','vendor')->first();
        User::updateOrCreate([
            'role_id'       => $shopOwnerRole->id,
            'name'          => 'Vendor',
            'email'         => 'vendor@gmail.com',
            'password'      => '12345678',
            'phone_number'  => '01744101013',
            'status'        => true,
            'suspend'       => false
        ]);

        // Create Staff
        $shopOwnerRole = Role::where('slug','staff')->first();
        User::updateOrCreate([
            'role_id'       => $shopOwnerRole->id,
            'name'          => 'Staff',
            'email'         => 'staff@gmail.com',
            'password'      => '12345678',
            'phone_number'  => '01744101014',
            'status'        => true,
            'suspend'       => false
        ]);

        // Create Customer
        $customerRole = Role::where('slug','customer')->first();
        User::updateOrCreate([
            'role_id'       => $customerRole->id,
            'name'          => 'Jone Doe',
            'email'         => 'user@gmail.com',
            'password'      => '12345678',
            'phone_number'  => '01744101015',
            'status'        => true,
            'suspend'       => false
        ]);
    }
}