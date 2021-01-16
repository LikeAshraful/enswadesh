<?php

namespace Database\Factories\General;

use App\Models\User;
use App\Models\General\Video;
use Illuminate\Database\Eloquent\Factories\Factory;

class VideoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Video::class;

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
