<?php

namespace Database\Factories\Shop;

use App\Models\User;
use App\Models\Shop\Shop;
use Illuminate\Support\Str;
use App\Models\Location\Area;
use App\Models\Location\City;
use App\Models\Shop\ShopType;
use App\Models\Location\Market;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\Factory;

class ShopFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Shop::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence(10);
        $slug = Str::of($title)->slug('-');

        return [
            'shop_owner_id' => User::all()->random()->id,
            'name' => $title,
            'slug' => $slug,
            'description' => $this->faker->paragraph,
            'city_id' => City::all()->random()->id,
            'area_id' => Area::all()->random()->id,
            'market_id' => Market::all()->random()->id,
            'shop_type_id' => ShopType::all()->random()->id,
            'shop_no' => $this->faker->randomDigit,
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->email,
            'fax' => $this->faker->phoneNumber,
            // 'logo' => Storage::disk('local')->put('fileuploads/shops', $file)
        ];
    }
}
