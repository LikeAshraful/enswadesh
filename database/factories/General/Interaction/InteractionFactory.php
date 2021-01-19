<?php

namespace Database\Factories\General\Interaction;

use App\Models\User;
use Illuminate\Support\Str;
use App\Models\General\Interaction\Interaction;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\General\Interaction\InteractionTopic;
use App\Models\General\Interaction\InteractionCategory;

class InteractionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Interaction::class;

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
            'slug' => $slug,
            'user_id' => User::all()->random()->id,
            'status' => $this->faker->randomElement(['Pending' ,'Approved', 'Declined']),
            'topic_id' => InteractionTopic::all()->random()->id,
            'interaction_category_id' => InteractionCategory::all()->random()->id
        ];
    }
}
