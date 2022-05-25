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
        $title = $this->faker->sentence(4);
        $slug = Str::of($title)->slug('-');

        return [
            'ref' => $this->faker->unique()->randomNumber,
            'name' => $title,
            'slug' => $slug,
            'sku' => $this->faker->unique()->randomNumber,
            'description' => $this->faker->paragraph,
            'user_id' => User::all()->random()->id,
            'shop_id' => Shop::all()->random()->id,
            'brand_id' => Brand::all()->random()->id,
            'price' => $this->faker->numberBetween(50,1500),
            'currency_type' => 'BDT',
            'sale_price' => $this->faker->randomDigit,
            'discount' => $this->faker->randomDigit,
            'discount_type' => $this->faker->randomElement(['Percentage','Number']),
            'vat' => 5,
            'alert' => 3,
            'product_type' => $this->faker->randomElement(['simple','size_base','weight_base']),
            'stocks' => $this->faker->randomDigit,
            'total_stocks' => $this->faker->randomDigit,
            'return_policy' => $this->faker->sentence(10),
            'warranty' => $this->faker->sentence(10),
            'offers' => $this->faker->sentence(10)
        ];
    }
}
