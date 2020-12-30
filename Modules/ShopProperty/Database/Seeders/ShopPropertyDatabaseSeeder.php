<?php

namespace Modules\ShopProperty\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Modules\ShopProperty\Entities\Area;
use Modules\ShopProperty\Entities\City;
use Modules\ShopProperty\Entities\Shop;
use Modules\ShopProperty\Entities\Floor;
use Modules\ShopProperty\Entities\Thana;
use Modules\ShopProperty\Entities\AppMenu;
use Modules\ShopProperty\Entities\MarketPlace;

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
                $thana = Thana::updateOrCreate(['thana_name' => 'Uttra', 'area_id' => $area->id, 'thana_description' => 'Uttra','thana_slug' => 'uttra']);
                    $market = MarketPlace::updateOrCreate(['thana_id' => $thana->id, 'market_name' => 'Rajlokkhi', 'marketplace_address' => 'Rajlokkhi, Uttra','marketplace_description' => 'Rajlokkhi, Uttra', 'marketplace_slug' => 'rajlokkhi']);
                        $floor = Floor::updateOrCreate(['market_place_id' => $market->id, 'floor_no' => '3','floor_note' => '3rd Floor']);
        // shop create seeder for database insert
        $user = Auth::user();
        Shop::updateOrCreate(['shop_owner_id' => 1, 'city_id' => $city->id, 'area_id' => $area->id, 'thana_id' => $thana->id, 'market_place_id' => $market->id, 'floor_id' => $floor->id,'shop_no' => '23432','shop_name' => 'Rahat Cosmetics', 'shop_phone' => '016542645', 'shop_email' => 'shop@gmail.com', 'shop_fax' => '02454864', 'shop_slug' => 'rahat_cosmetics', 'shop_cover_image' => 'Image', 'shop_icon' => 'Icon', 'shop_type' => 'Gocery', 'shop_status' => 1, 'shop_description' => 'This shop is good']);

            $area = Area::updateOrCreate(['area_name' => 'Dhaka South', 'city_id' => $city->id, 'area_description' => 'Dhaka South','area_slug' => 'dhaka_south']);
                $thana = Thana::updateOrCreate(['thana_name' => 'Tejgaon', 'area_id' => $area->id, 'thana_description' => 'Dhaka South Thana','thana_slug' => 'tejgaon']);
                    $market = MarketPlace::updateOrCreate(['thana_id' => $thana->id, 'market_name' => 'Basundhara City', 'marketplace_address' => 'Panthopath, Dhaka','marketplace_description' => 'Panthopath, Dhaka', 'marketplace_slug' => 'rajlokkhi']);
                        Floor::updateOrCreate(['market_place_id' => $market->id, 'floor_no' => '4','floor_note' => '4rd Floor']);

        $city = City::updateOrCreate(['city_name' => 'Rajshahi','city_description' => 'Rajshahi','city_slug' => 'rajshahi']);
            $area = Area::updateOrCreate(['area_name' => 'Rajshahi East', 'city_id' => $city->id, 'area_description' => 'Rajshahi East','area_slug' => 'rajshahi_east']);
                $thana = Thana::updateOrCreate(['thana_name' => 'Paba', 'area_id' => $area->id, 'thana_description' => 'Paba','thana_slug' => 'paba']);
                    $market = MarketPlace::updateOrCreate(['thana_id' => $thana->id, 'market_name' => 'RDA Market', 'marketplace_address' => 'Zero Point, Rajshahi','marketplace_description' => 'Zero Point, Rajshahi', 'marketplace_slug' => 'rda_market']);
                     Floor::updateOrCreate(['market_place_id' => $market->id, 'floor_no' => '2','floor_note' => '2rd Floor']);

            $area = Area::updateOrCreate(['area_name' => 'Rajshahi West', 'city_id' => $city->id, 'area_description' => 'Rajshahi West','area_slug' => 'rajshahi_west']);
                $thana = Thana::updateOrCreate(['thana_name' => 'Shahmukhdum', 'area_id' => $area->id, 'thana_description' => 'Shahmukhdum','thana_slug' => 'shahmukhdum']);
                    $market = MarketPlace::updateOrCreate(['thana_id' => $thana->id, 'market_name' => 'New Market', 'marketplace_address' => 'Shahmukhdum, Rajshahi','marketplace_description' => 'Shahmukhdum, Rajshahi', 'marketplace_slug' => 'new_market']);
                        Floor::updateOrCreate(['market_place_id' => $market->id, 'floor_no' => '5','floor_note' => '5rd Floor']);


        Model::unguard();
        // $this->call("OthersTableSeeder");
    }
}