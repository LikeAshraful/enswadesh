<?php

namespace Database\Factories\Interaction;

use Illuminate\Support\Str;
use App\Models\Interaction\InteractionTopic;
use App\Models\Interaction\InteractionCategory;
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
        $slug = Str::of($title)->slug('-');

        return [
            'title' => $title,
            'description' => $this->faker->paragraph,
            'slug' => $slug,
            'interaction_category_id' => InteractionCategory::all()->random()->id,
        ];
    }
}
