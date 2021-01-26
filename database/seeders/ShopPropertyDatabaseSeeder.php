<?php

namespace Database\Seeders;

use App\Models\Shop\Shop;
use App\Models\Location\Area;
use App\Models\Location\City;
use App\Models\Shop\ShopType;
use App\Models\Location\Floor;
use App\Models\Location\Thana;
use App\Models\Location\Market;
use Illuminate\Database\Seeder;
use App\Models\General\Menu\AppMenu;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

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
                //$thana = Thana::updateOrCreate(['thana_name' => 'Uttra', 'area_id' => $area->id, 'thana_description' => 'Uttra','thana_slug' => 'uttra']);
                    $market = Market::updateOrCreate(['city_id' => $city->id, 'area_id' => $area->id, 'market_name' => 'Rajlokkhi', 'market_address' => 'Rajlokkhi, Uttra','market_description' => 'Rajlokkhi, Uttra', 'market_slug' => 'rajlokkhi']);
                        //$floor = Floor::updateOrCreate(['market_id' => $market->id, 'floor_no' => '3','floor_note' => '3rd Floor']);
        // shop create seeder for database insert
        $user = Auth::user();
        // shoptype create seeder for database insert
        $shoptype = ShopType::updateOrCreate(['shop_type_name' => 'Grocery', 'shop_type_description' => 'Grocery Shop', 'shop_type_slug' => 'grocery']);
        Shop::updateOrCreate(['shop_owner_id' => 1, 'city_id' => $city->id, 'area_id' => $area->id, 'market_id' => $market->id, 'floor_no' => 3, 'shop_type_id' => $shoptype->id, 'shop_no' => '23432','shop_name' => 'Rahat Cosmetics', 'shop_phone' => '016542645', 'shop_email' => 'shop@gmail.com', 'shop_fax' => '02454864', 'shop_slug' => 'rahat_cosmetics', 'shop_cover_image' => 'Image', 'shop_logo' => 'Icon', 'shop_status' => 1, 'shop_description' => 'This shop is good']);

            $area = Area::updateOrCreate(['area_name' => 'Dhaka South', 'city_id' => $city->id, 'area_description' => 'Dhaka South','area_slug' => 'dhaka_south']);
                //$thana = Thana::updateOrCreate(['thana_name' => 'Tejgaon', 'area_id' => $area->id, 'thana_description' => 'Dhaka South Thana','thana_slug' => 'tejgaon']);
                    $market = Market::updateOrCreate(['city_id' => $city->id, 'area_id' => $area->id, 'market_name' => 'Basundhara City', 'market_address' => 'Panthopath, Dhaka','market_description' => 'Panthopath, Dhaka', 'market_slug' => 'rajlokkhi']);
                        //Floor::updateOrCreate(['market_id' => $market->id, 'floor_no' => '4','floor_note' => '4rd Floor']);

        $city = City::updateOrCreate(['city_name' => 'Rajshahi','city_description' => 'Rajshahi','city_slug' => 'rajshahi']);
            $area = Area::updateOrCreate(['area_name' => 'Rajshahi East', 'city_id' => $city->id, 'area_description' => 'Rajshahi East','area_slug' => 'rajshahi_east']);
                //$thana = Thana::updateOrCreate(['thana_name' => 'Paba', 'area_id' => $area->id, 'thana_description' => 'Paba','thana_slug' => 'paba']);
                    $market = Market::updateOrCreate(['city_id' => $city->id, 'area_id' => $area->id, 'market_name' => 'RDA Market', 'market_address' => 'Zero Point, Rajshahi','market_description' => 'Zero Point, Rajshahi', 'market_slug' => 'rda_market']);
                     //Floor::updateOrCreate(['market_id' => $market->id, 'floor_no' => '2','floor_note' => '2rd Floor']);

            $area = Area::updateOrCreate(['area_name' => 'Rajshahi West', 'city_id' => $city->id, 'area_description' => 'Rajshahi West','area_slug' => 'rajshahi_west']);
                //$thana = Thana::updateOrCreate(['thana_name' => 'Shahmukhdum', 'area_id' => $area->id, 'thana_description' => 'Shahmukhdum','thana_slug' => 'shahmukhdum']);
                    $market = Market::updateOrCreate(['city_id' => $city->id, 'area_id' => $area->id, 'market_name' => 'New Market', 'market_address' => 'Shahmukhdum, Rajshahi','market_description' => 'Shahmukhdum, Rajshahi', 'market_slug' => 'new_market']);
                        //Floor::updateOrCreate(['market_id' => $market->id, 'floor_no' => '5','floor_note' => '5rd Floor']);


        Model::unguard();
        // $this->call("OthersTableSeeder");
    }
}
