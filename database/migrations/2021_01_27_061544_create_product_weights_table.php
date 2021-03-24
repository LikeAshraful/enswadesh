<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductWeightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_weights', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('product_id')->constrained('products');
            $table->unsignedInteger('weight_id')->constrained('weights');
            $table->string('weight')->nullable();
            $table->decimal('price', 8,2)->nullable()->default(0);
            $table->decimal('sale_price', 8,2)->nullable()->default(0);
            $table->integer('discount')->nullable()->default(0);
            $table->string('discount_type')->nullable();
            $table->text('offer')->nullable();
            $table->unsignedInteger('stocks')->nullable()->default(0);
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
        Schema::dropIfExists('product_weights');
    }
}
