<?php

namespace Database\Factories\Interaction;

use App\Models\Interaction\InteractionTopic;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class InteractionTopicFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = InteractionTopic::class;

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
            'title' => $title,
            'description' => $this->faker->paragraph,
            'slug' => $slug
        ];
    }
}
