<?php

namespace Database\Factories\General;

use App\Models\User;
use App\Models\General\Template;
use Illuminate\Database\Eloquent\Factories\Factory;

class TemplateFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Template::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(10),
            'description' => $this->faker->paragraph,
            'slug' => $this->faker->slug,
            'created_by' => User::all()->random()->id
        ];
    }
}
