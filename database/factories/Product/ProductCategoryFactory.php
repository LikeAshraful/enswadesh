<?php

namespace Database\Factories\Product;

use App\Models\Product\Product;
use App\Models\Product\ProductCategory;
use App\Models\General\Category\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductCategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProductCategory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_id' => Product::all()->random()->id,
            'category_id' => Category::all()->where('level', 1)->random()->id
        ];
    }
}
