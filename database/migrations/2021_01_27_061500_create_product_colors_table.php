<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductColorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_colors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id')->constrained('products');
            $table->unsignedBigInteger('color_id')->constrained('colors');
            $table->unsignedBigInteger('media_id')->nullable();
            $table->boolean('has_size')->default(false);
            $table->unsignedBigInteger('stocks')->nullable();
            $table->decimal('price', 8,2)->nullable();
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
        Schema::dropIfExists('product_colors');
    }
}
