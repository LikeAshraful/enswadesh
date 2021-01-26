<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('shop_owner_id');
            $table->unsignedBigInteger('city_id');
            $table->unsignedBigInteger('area_id');
            $table->unsignedBigInteger('market_id');
            $table->integer('floor_no')              ->nullable();
            $table->unsignedBigInteger('shop_type_id')->nullable();
            $table->string('shop_no')               ->nullable();
            $table->string('shop_name')             ->nullable();
            $table->string('shop_phone')            ->nullable();
            $table->string('shop_email')            ->nullable();
            $table->string('shop_fax')              ->nullable();
            $table->string('shop_slug')             ->nullable();
            $table->string('shop_cover_image')      ->nullable();
            $table->string('shop_logo')             ->nullable();
            $table->integer('shop_status')          ->nullable();
            $table->text('shop_description')        ->nullable();
            $table->string('meta_title_shop')       ->nullable();
            $table->text('meta_keywords_shop')      ->nullable();
            $table->text('meta_description_shop')   ->nullable();
            $table->string('meta_og_image_shop')    ->nullable();
            $table->string('meta_og_url_shop')      ->nullable();
            $table->timestamps();
            $table->foreign('shop_owner_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
            $table->foreign('area_id')->references('id')->on('areas')->onDelete('cascade');
            $table->foreign('market_id')->references('id')->on('markets')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shops');
    }
}
