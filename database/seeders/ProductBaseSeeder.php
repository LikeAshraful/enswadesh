<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product\Base\Size;
use App\Models\Product\Base\Color;
use App\Models\Product\Base\Weight;

class ProductBaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Color
        $color = Color::updateOrCreate([
            'name'          => 'Red',
            'color_code'    => '#eb0f0f',
            'type'          => 'custom',
            'user_id'       => 1,
            'status'        => 0
        ]);
        $color = Color::updateOrCreate([
            'name'          => 'Black',
            'color_code'    => '#000000',
            'type'          => 'custom',
            'user_id'       => 1,
            'status'        => 1
        ]);



        //Size
        $size = Size::updateOrCreate([
            'name'          => 'M',
            'type'          => 'custom',
            'user_id'       => 1,
            'status'        => 0
        ]);


        $size = Size::updateOrCreate([
            'name'          => 'L',
            'type'          => 'custom',
            'user_id'       => 1,
            'status'        => 1
        ]);

        //Weight
        $weight = Weight::updateOrCreate([
            'name'          => 'Kg',
            'type'          => 'custom',
            'user_id'       => 1,
            'status'        => 0
        ]);

        $weight = Weight::updateOrCreate([
            'name'          => 'Liter',
            'type'          => 'custom',
            'user_id'       => 1,
            'status'        => 1
        ]);
    }
}
