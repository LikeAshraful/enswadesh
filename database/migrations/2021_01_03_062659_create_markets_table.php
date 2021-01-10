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
            $table->integer('thana_id')             ->nullable();
            $table->string('market_name')           ->nullable();
            $table->string('market_address')        ->nullable();
            $table->string('market_description')    ->nullable();
            $table->string('market_slug')           ->nullable();
            $table->string('meta_title_market')     ->nullable();
            $table->text('meta_keywords_market')    ->nullable();
            $table->text('meta_description_market') ->nullable();
            $table->string('meta_og_image_market')  ->nullable();
            $table->string('meta_og_url_market')    ->nullable();
            $table->string('market_icon')           ->nullable();
            $table->string('market_image')          ->nullable();
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
        Schema::dropIfExists('markets');
    }
}