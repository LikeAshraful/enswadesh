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
        $adminRole = Role::where('slug','admin')->first();
        User::updateOrCreate([
            'role_id'       => $adminRole->id,
            'name'          => 'Admin',
            'email'         => 'admin@gmail.com',
            'image'         => 'user.png',
            'password'      => Hash::make('12345678'),
            'phone_number'  => '01744101010',
            'status'        => true
        ]);

        // Create admin
        $shopOwnerRole = Role::where('slug','shop_owner')->first();
        User::updateOrCreate([
            'role_id'       => $shopOwnerRole->id,
            'name'          => 'Muhammad',
            'email'         => 'admin@mail.com',
            'image'         => 'user.png',
            'password'      => Hash::make('12345678'),
            'phone_number'  => '01744101011',
            'status'        => true
        ]);

        // Create user
        $customerRole = Role::where('slug','customer')->first();
        User::updateOrCreate([
            'role_id'       => $customerRole->id,
            'name'          => 'Jone Doe',
            'email'         => 'user@mail.com',
            'image'         =>'user.png',
            'password'      => Hash::make('12345678'),
            'phone_number'  => '01744101012',
            'status'        => true
        ]);
    }
}