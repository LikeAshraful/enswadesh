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
        AppMenu::updateOrCreate(['name' => 'Go To Market','description' => 'Visit Market for product purchase','slug' => 'got-to-market']);
        AppMenu::updateOrCreate(['name' => 'My Shop', 'description' => 'My Shop for product purchase', 'slug' => 'my-shop']);
        AppMenu::updateOrCreate(['name' => 'Earnnig','description' => 'Earnnig for product purchase','slug' => 'earnnig']);

        // cities seeder for database insert
        $city = City::updateOrCreate(['name' => 'Dhaka','description' => 'Dhaka','slug' => 'dhaka']);
            $area = Area::updateOrCreate(['name' => 'Dhaka North', 'city_id' => $city->id, 'description' => 'Dhaka North','slug' => 'dhaka-north']);
                //$thana = Thana::updateOrCreate(['thana_name' => 'Uttra', 'area_id' => $area->id, 'thana_description' => 'Uttra','thana_slug' => 'uttra']);
                    $market = Market::updateOrCreate(['city_id' => $city->id, 'area_id' => $area->id, 'name' => 'Rajlokkhi', 'address' => 'Rajlokkhi, Uttra','description' => 'Rajlokkhi, Uttra', 'slug' => 'rajlokkhi', 'total_floor' => 5]);
                        //$floor = Floor::updateOrCreate(['market_id' => $market->id, 'floor_no' => '3','floor_note' => '3rd Floor']);
        // shop create seeder for database insert
        $user = Auth::user();
        // shoptype create seeder for database insert
        $shoptype = ShopType::updateOrCreate(['name' => 'Grocery', 'description' => 'Grocery Shop', 'slug' => 'grocery']);
        Shop::updateOrCreate(['shop_owner_id' => 1, 'city_id' => $city->id, 'area_id' => $area->id, 'market_id' => $market->id, 'floor_no' => 'Ground Floor', 'shop_type_id' => $shoptype->id, 'shop_no' => '23432','name' => 'Rahat Cosmetics', 'phone' => '016542645', 'email' => 'shop@gmail.com', 'fax' => '02454864', 'slug' => 'rahat-cosmetics', 'cover_image' => 'Image', 'logo' => 'Icon', 'status' => 1, 'description' => 'This shop is good']);

        Shop::updateOrCreate(['shop_owner_id' => 1, 'city_id' => $city->id, 'area_id' => $area->id, 'market_id' => $market->id, 'floor_no' => '2nd Floor', 'shop_type_id' => $shoptype->id, 'shop_no' => '3254','name' => 'Polas Cosmetics', 'phone' => '016542645', 'email' => 'shop@gmail.com', 'fax' => '02454864', 'slug' => 'polas-cosmetics', 'cover_image' => 'Image', 'logo' => 'Icon', 'status' => 1, 'description' => 'This shop is good']);

            $area = Area::updateOrCreate(['name' => 'Dhaka South', 'city_id' => $city->id, 'description' => 'Dhaka South','slug' => 'dhaka-south']);
                //$thana = Thana::updateOrCreate(['thana_name' => 'Tejgaon', 'area_id' => $area->id, 'thana_description' => 'Dhaka South Thana','thana_slug' => 'tejgaon']);
                    $market = Market::updateOrCreate(['city_id' => $city->id, 'area_id' => $area->id, 'name' => 'Basundhara City', 'address' => 'Panthopath, Dhaka','description' => 'Panthopath, Dhaka', 'slug' => 'basundhrar-city', 'total_floor' => 10]);
                        //Floor::updateOrCreate(['market_id' => $market->id, 'floor_no' => '4','floor_note' => '4rd Floor']);

        $city = City::updateOrCreate(['name' => 'Rajshahi','description' => 'Rajshahi','slug' => 'rajshahi']);
            $area = Area::updateOrCreate(['name' => 'Rajshahi East', 'city_id' => $city->id, 'description' => 'Rajshahi East','slug' => 'rajshahi-east']);
                //$thana = Thana::updateOrCreate(['thana_name' => 'Paba', 'area_id' => $area->id, 'thana_description' => 'Paba','thana_slug' => 'paba']);
                    $market = Market::updateOrCreate(['city_id' => $city->id, 'area_id' => $area->id, 'name' => 'RDA Market', 'address' => 'Zero Point, Rajshahi','description' => 'Zero Point, Rajshahi', 'slug' => 'rda-market', 'total_floor' => 6]);
                     //Floor::updateOrCreate(['market_id' => $market->id, 'floor_no' => '2','floor_note' => '2rd Floor']);

            $area = Area::updateOrCreate(['name' => 'Rajshahi West', 'city_id' => $city->id, 'description' => 'Rajshahi West','slug' => 'rajshahi-west']);
                //$thana = Thana::updateOrCreate(['thana_name' => 'Shahmukhdum', 'area_id' => $area->id, 'thana_description' => 'Shahmukhdum','thana_slug' => 'shahmukhdum']);
                    $market = Market::updateOrCreate(['city_id' => $city->id, 'area_id' => $area->id, 'name' => 'New Market', 'address' => 'Shahmukhdum, Rajshahi','description' => 'Shahmukhdum, Rajshahi', 'slug' => 'new-market', 'total_floor' => 3]);
                        //Floor::updateOrCreate(['market_id' => $market->id, 'floor_no' => '5','floor_note' => '5rd Floor']);


        Model::unguard();
        // $this->call("OthersTableSeeder");
    }
}
