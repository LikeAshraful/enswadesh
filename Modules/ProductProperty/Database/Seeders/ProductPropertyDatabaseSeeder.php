<?php

namespace Modules\ProductProperty\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\ProductProperty\Entities\MainCategory;
use Modules\ProductProperty\Entities\SubCategory;

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
        $mainCategoryProduct = MainCategory::updateOrCreate(['main_category_name' => 'Electronic','main_category_slug' =>  'electronic']);
        SubCategory::updateOrCreate([
            'main_category_id'  => $mainCategoryProduct->id,
            'sub_category_name' => 'Laptop',
            'sub_category_slug' => 'laptop',
        ]);

        SubCategory::updateOrCreate([
            'main_category_id'  => $mainCategoryProduct->id,
            'sub_category_name' => 'Desktop',
            'sub_category_slug' => 'desktop',
        ]);

        $mainCategoryProduct = MainCategory::updateOrCreate(['main_category_name' => 'Shoes','main_category_slug' =>  'shoes']);
        SubCategory::updateOrCreate([
            'main_category_id'  => $mainCategoryProduct->id,
            'sub_category_name' => 'Flat Sandals',
            'sub_category_slug' => 'flat',
        ]);
        SubCategory::updateOrCreate([
            'main_category_id'  => $mainCategoryProduct->id,
            'sub_category_name' => 'Heels',
            'sub_category_slug' => 'heels',
        ]);
        SubCategory::updateOrCreate([
            'main_category_id'  => $mainCategoryProduct->id,
            'sub_category_name' => 'Flat Shoes',
            'sub_category_slug' => 'flat',
        ]);

        Model::unguard();

        // $this->call(MainCategory::class);
    }
}
