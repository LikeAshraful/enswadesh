<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\General\Brand\Brand;
use App\Models\General\Category\Category;

class GeneralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //Brand
         $brand = Brand::updateOrCreate([
            'name'          => 'Asus',
            'slug'          => 'asus',
            'description'   => 'This is description part',
            'icon'          => '1.jpg'
        ]);
        $brand = Brand::updateOrCreate([
            'name'          => 'Dell',
            'slug'          => 'dell',
            'description'   => 'This is description part',
            'icon'          => '1.jpg'
        ]);


        
        // Category
        $category = Category::updateOrCreate([
            'parent_id'     => 0,
            'name'          => 'Electronic',
            'slug'          => 'electronic',
            'status'        => 1,
            'shop_id'       =>0,
            'level'         =>1,
            'icon'          => '1.jpg',
            'description'   => 'This is description part'
            ]);

        $category_one = Category::updateOrCreate([
            'parent_id'     => $category->id,
            'name'          => 'Laptop',
            'slug'          => 'laptop',
            'status'        => 1,
            'shop_id'       =>0,
            'level'         =>$category->level+1,
            'icon'          => '2.jpg',
            'description'   => 'This is description part'
            ]);

        $category_two = Category::updateOrCreate([
            'parent_id'     => $category_one->id,
            'name'          => 'Asus',
            'slug'          => 'asus',
            'status'        => 1,
            'shop_id'       =>0,
            'level'         =>$category_one->level+1,
            'icon'          => '3.jpg',
            'description'   => 'This is description part'
            ]);

        $category = Category::updateOrCreate([
            'parent_id'     => 0,
            'name'          => 'Grocery',
            'slug'          => 'grocery',
            'status'        => 1,
            'shop_id'       =>0,
            'level'         =>1,
            'icon'          => '4.jpg',
            'description'   => 'This is description part'
            ]);
        $category_one = Category::updateOrCreate([
            'parent_id'     => $category->id,
            'name'          => 'Fish',
            'slug'          => 'fish',
            'status'        => 1,
            'level'         =>$category->level+1,
            'shop_id'       =>0,
            'icon'          => '1.jpg',
            'description'   => 'This is description part'
            ]);
        $category_two = Category::updateOrCreate([
            'parent_id'     => $category->id,
            'name'          => 'Hilsha',
            'slug'          => 'hilsha',
            'status'        => 1,
            'level'         =>$category_one->level+1,
            'shop_id'       =>0,
            'icon'          => '1.jpg',
            'description'   => 'This is description part'
            ]);
    }
}
