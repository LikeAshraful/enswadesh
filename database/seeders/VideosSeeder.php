<?php

namespace Database\Seeders;

use App\Models\General\Video;
use Illuminate\Database\Seeder;

class VideosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Video::factory()->count(10)->create();
    }
}
