<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PermissionSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(SettingSeeder::class);
        $this->call(FloorSeeder::class);
        $this->call(ShopPropertyDatabaseSeeder::class);
        $this->call(GeneralSeeder::class);
        $this->call(OrderPropertySeeder::class);
        $this->call(InteractionCategorySeeder::class);
        $this->call(InteractionTopicSeeder::class);
        $this->call(InteractionSeeder::class);
        $this->call(ProductBaseSeeder::class);
        $this->call(ShopSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(ProductUnitSeeder::class);
    }
}
