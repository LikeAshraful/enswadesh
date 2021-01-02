<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->integer('shop_owner_id')->nullable();
            $table->integer('city_id')->nullable();
            $table->integer('area_id')->nullable();
            $table->integer('thana_id')->nullable();
            $table->integer('market_place_id')->nullable();
            $table->integer('floor_id')->nullable();
            $table->string('shop_no')->nullable();
            $table->string('shop_name')->nullable();
            $table->string('shop_phone')->nullable();
            $table->string('shop_email')->nullable();
            $table->string('shop_fax')->nullable();
            $table->string('shop_slug')->nullable();
            $table->string('shop_cover_image')->nullable();
            $table->string('shop_icon')->nullable();
            $table->string('shop_type')->nullable();
            $table->integer('shop_status')->nullable();
            $table->text('shop_description')->nullable();
            $table->string('meta_title_shop')->nullable();
            $table->text('meta_keywords_shop')->nullable();
            $table->text('meta_description_shop')->nullable();
            $table->string('meta_og_image_shop')->nullable();
            $table->string('meta_og_url_shop')->nullable();
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
        Schema::dropIfExists('shops');
    }
}
