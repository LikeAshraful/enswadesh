<?php

namespace Modules\ShopProperty\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\ShopProperty\Entities\Area;
use Modules\ShopProperty\Entities\City;
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
        // app menu seeder for database insert
        AppMenu::updateOrCreate(['menu_name' => 'Go To Market','menu_description' => 'Visit Market for product purchase','menu_slug' => 'got_to_market']);
        AppMenu::updateOrCreate(['menu_name' => 'My Shop', 'menu_description' => 'My Shop for product purchase', 'menu_slug' => 'my_shop']);
        AppMenu::updateOrCreate(['menu_name' => 'Earnnig','menu_description' => 'Earnnig for product purchase','menu_slug' => 'earnnig']);
        // cities seeder for database insert
        $city = City::updateOrCreate(['city_name' => 'Dhaka','city_description' => 'Dhaka','city_slug' => 'dhaka']);
        $area = Area::updateOrCreate(['area_name' => 'Dhaka North', 'city_id' => $city->id, 'area_description' => 'Dhaka North','area_slug' => 'dhaka_north']);
        $area = Area::updateOrCreate(['area_name' => 'Dhaka South', 'city_id' => $city->id, 'area_description' => 'Dhaka South','area_slug' => 'dhaka_south']);


        Model::unguard();
        // $this->call("OthersTableSeeder");
    }
}