<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product\ProductUnit;

class ProductUnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductUnit::updateOrCreate(['name' => 'KG']);
        ProductUnit::updateOrCreate(['name' => 'Gram']);
        ProductUnit::updateOrCreate(['name' => 'Dhara']);
        ProductUnit::updateOrCreate(['name' => 'Litter']);
        ProductUnit::updateOrCreate(['name' => 'Mili Litter']);
        ProductUnit::updateOrCreate(['name' => 'Dozen']);
        ProductUnit::updateOrCreate(['name' => 'Hali']);
        ProductUnit::updateOrCreate(['name' => 'Jora']);
        ProductUnit::updateOrCreate(['name' => 'Kuri']);
        ProductUnit::updateOrCreate(['name' => 'CM']);
        ProductUnit::updateOrCreate(['name' => 'MM']);
        ProductUnit::updateOrCreate(['name' => 'Gauze']);
        ProductUnit::updateOrCreate(['name' => 'Foot']);
        ProductUnit::updateOrCreate(['name' => 'Piece']);
        ProductUnit::updateOrCreate(['name' => 'Set']);
        ProductUnit::updateOrCreate(['name' => 'Cartoon']);
        ProductUnit::updateOrCreate(['name' => 'Packet']);
    }
}
