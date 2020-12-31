<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarketPlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('market_places', function (Blueprint $table) {
            $table->id();
            $table->integer('thana_id')->nullable();
            $table->string('market_name')->nullable();
            $table->string('marketplace_address')->nullable();
            $table->string('marketplace_description')->nullable();
            $table->string('marketplace_slug')->nullable();
            $table->string('meta_title_market')->nullable();
            $table->text('meta_keywords_market')->nullable();
            $table->text('meta_description_market')->nullable();
            $table->string('meta_og_image_market')->nullable();
            $table->string('meta_og_url_market')->nullable();
            $table->text('marketplace_icon')->nullable();
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
        Schema::dropIfExists('market_places');
    }
}
