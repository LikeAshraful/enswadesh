<?php

namespace Database\Factories\Product;

use App\Models\User;
use App\Models\Shop\Shop;
use Illuminate\Support\Str;
use App\Models\Product\Product;
use App\Models\General\Brand\Brand;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence(10);
        $slug = Str::of($title)->slug('_');
        
        return [
            'ref' => $this->faker->unique()->randomNumber,
            'name' => $title,
            'slug' => $slug,
            'description' => $this->faker->paragraph,
            'user_id' => User::all()->random()->id,            
            'shop_id' => Shop::all()->random()->id,
            'brand_id' => Brand::all()->random()->id,
            'price' => $this->faker->randomDigit,
            'product_type' => $this->faker->randomElement(['color_base','size_base','weight_base','feature_base']),
            'total_stocks' => $this->faker->randomDigit,
            'refund_policy' => $this->faker->sentence(10),
            'service_policy' => $this->faker->sentence(10),
            'offers' => $this->faker->sentence(10)
        ];
    }
}
