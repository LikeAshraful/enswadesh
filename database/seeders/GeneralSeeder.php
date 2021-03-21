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
            'shop_id'       => 1,
            'user_id'       => 4,
            'description'   => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'
        ]);
        $brand = Brand::updateOrCreate([
            'name'          => 'Dell',
            'slug'          => 'dell',
            'shop_id'       => 2,
            'user_id'       => 4,
            'description'   => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'
        ]);



        // Category
        $category = Category::updateOrCreate([
            'parent_id'     => 0,
            'name'          => 'Electronic',
            'slug'          => 'electronic',
            'status'        => 1,
            'shop_id'       =>0,
            'user_id'       => 1,
            'level'         =>1,
            'description'   => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'
            ]);

        $category_one = Category::updateOrCreate([
            'parent_id'     => $category->id,
            'name'          => 'Laptop',
            'slug'          => 'laptop',
            'status'        => 1,
            'shop_id'       =>0,
            'user_id'       => 1,
            'level'         =>$category->level+1,
            'description'   => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'
            ]);

        $category_two = Category::updateOrCreate([
            'parent_id'     => $category_one->id,
            'name'          => 'Asus',
            'slug'          => 'asus',
            'status'        => 1,
            'user_id'       => 1,
            'shop_id'       =>0,
            'level'         =>$category_one->level+1,
            'description'   => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'
            ]);

        $category = Category::updateOrCreate([
            'parent_id'     => 0,
            'name'          => 'Grocery',
            'slug'          => 'grocery',
            'status'        => 1,
            'shop_id'       =>0,
            'level'         =>1,
            'user_id'       => 1,
            'description'   => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'
            ]);
        $category_one = Category::updateOrCreate([
            'parent_id'     => $category->id,
            'name'          => 'Fish',
            'slug'          => 'fish',
            'status'        => 1,
            'user_id'       => 1,
            'level'         =>$category->level+1,
            'shop_id'       =>0,
            'description'   => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'
            ]);
        $category_two = Category::updateOrCreate([
            'parent_id'     => $category->id,
            'name'          => 'Hilsha',
            'slug'          => 'hilsha',
            'status'        => 1,
            'user_id'       => 1,
            'level'         =>$category_one->level+1,
            'shop_id'       =>0,
            'description'   => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'
            ]);

            Category::updateOrCreate([
                'parent_id'     => 0,
                'name'          => 'Health & Beauty',
                'slug'          => 'health-beauty',
                'status'        => 1,
                'shop_id'       =>0,
                'user_id'       => 1,
                'level'         =>1,
                'description'   => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'
            ]);
            Category::updateOrCreate([
                'parent_id'     => 0,
                'name'          => 'Babies & Toys',
                'slug'          => 'babies-toys',
                'status'        => 1,
                'shop_id'       =>0,
                'user_id'       => 1,
                'level'         =>1,
                'description'   => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'
            ]);
            Category::updateOrCreate([
                'parent_id'     => 0,
                'name'          => 'Fashions',
                'slug'          => 'fashions',
                'status'        => 1,
                'shop_id'       =>0,
                'user_id'       => 1,
                'level'         =>1,
                'description'   => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'
            ]);
    }
}