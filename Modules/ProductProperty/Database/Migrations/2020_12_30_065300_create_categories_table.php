<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description')       ->nullable();
            $table->string('slug');
            $table->string('icon')              ->nullable();

            $table->tinyInteger('status')       ->default(1);
            $table->integer('shop_id')          ->default(0);
            $table->integer('level')            ->default(1);

            $table->integer('created_by')       ->unsigned()->nullable();
            $table->integer('updated_by')       ->unsigned()->nullable();
            $table->integer('deleted_by')       ->unsigned()->nullable();

            $table->unsignedInteger('parent_id')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
