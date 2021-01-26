<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\General\Interaction\InteractionTopic;

class InteractionTopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        InteractionTopic::factory()->count(10)->create();
    }
}
