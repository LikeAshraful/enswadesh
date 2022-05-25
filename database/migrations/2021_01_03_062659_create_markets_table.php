<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('markets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('city_id');
            $table->unsignedBigInteger('area_id');
            $table->string('name')           ->nullable();
            $table->string('address')        ->nullable();
            $table->string('description')    ->nullable();
            $table->string('slug')           ->nullable();
            $table->string('meta_title')     ->nullable();
            $table->text('meta_keywords')    ->nullable();
            $table->text('meta_description') ->nullable();
            $table->string('meta_og_image')  ->nullable();
            $table->string('meta_og_url')    ->nullable();
            $table->string('icon')           ->nullable();
            $table->string('image')          ->nullable();
            $table->integer('total_floor')          ->nullable();
            $table->timestamps();
            $table->foreign('city_id')->references('id')->on('cities')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('area_id')->references('id')->on('areas')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('markets');
    }
}
