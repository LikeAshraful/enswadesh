<?php

floorspace Database\Seeders;

use Illuminate\Database\Seeder;

class FloorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Floor::updateOrCreate(['floor_no' => '0', 'floor' => 'Ground Floor']);
        Floor::updateOrCreate(['floor_no' => '1', 'floor' => '1st Floor']);
        Floor::updateOrCreate(['floor_no' => '2', 'floor' => '2nd Floor']);
        Floor::updateOrCreate(['floor_no' => '3', 'floor' => '3rd Floor']);
        Floor::updateOrCreate(['floor_no' => '4', 'floor' => '4th Floor']);
        Floor::updateOrCreate(['floor_no' => '5', 'floor' => '5th Floor']);
        Floor::updateOrCreate(['floor_no' => '6', 'floor' => '6th Floor']);
        Floor::updateOrCreate(['floor_no' => '7', 'floor' => '7th Floor']);
        Floor::updateOrCreate(['floor_no' => '8', 'floor' => '8th Floor']);
        Floor::updateOrCreate(['floor_no' => '9', 'floor' => '9th Floor']);
        Floor::updateOrCreate(['floor_no' => '10', 'floor' => '10th Floor']);
    }
}
