<?php

namespace Modules\ProductProperty\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\ProductProperty\Entities\Category;
use Modules\ProductProperty\Entities\SubCategory;
use Modules\ProductProperty\Entities\MainCategory;

class ProductPropertyDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Category
        $category = Category::updateOrCreate([
            'parent_id'     => 0,
            'name'          => 'Electronic'
            ]);

        $category_one = Category::updateOrCreate([
            'parent_id'     => $category->id,
            'name'          => 'Laptop',
            ]);

        $category_two = Category::updateOrCreate([
            'parent_id'     => $category_one->id,
            'name'          => 'Asus'
            ]);

        $category_three = Category::updateOrCreate([
            'parent_id'     => $category_two->id,
            'name'          => 'X556U',
            ]);
        $category_four = Category::updateOrCreate([
            'parent_id'     => $category_two->id,
            'name'          => '554Xu',
            ]);
            
        Model::unguard();

        // $this->call(MainCategory::class);
    }
}