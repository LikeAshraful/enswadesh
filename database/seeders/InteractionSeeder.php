<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\General\Interaction\Interaction;

class InteractionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Interaction::factory()->count(10)->create();
    }
}
