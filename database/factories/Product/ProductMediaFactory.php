<?php

namespace Database\Factories\Product;

use App\Models\Product\Product;
use App\Models\Product\ProductMedia;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductMediaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProductMedia::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'src' => Storage::disk('local')->put('fileuploads/products', $file),
            'product_id' => Product::all()->random()->id,            
            'description' => $this->faker->sentence(),
            'type' => 'image',
        ];
    }
}
