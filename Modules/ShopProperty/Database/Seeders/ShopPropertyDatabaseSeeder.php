<?php

namespace Modules\ShopProperty\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\ShopProperty\Entities\AppMenu;

class ShopPropertyDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AppMenu::updateOrCreate([
            'menu_name' => 'Go To Market',
            'menu_description' => 'Visit Market for product purchase',
            'menu_slug' => 'got_to_market',

            'menu_name' => 'My Shop',
            'menu_description' => 'My Shop for product purchase',
            'menu_slug' => 'my_shop',

            'menu_name' => 'Earnnig',
            'menu_description' => 'Earnnig for product purchase',
            'menu_slug' => 'earnnig',
            ]);
        Model::unguard();

        // $this->call("OthersTableSeeder");
    }
}