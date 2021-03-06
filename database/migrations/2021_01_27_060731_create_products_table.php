<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('ref', 20)->index()->unique();
            $table->string('name')->index();
            $table->string('slug');
            $table->string('sku')->index();
            $table->unsignedBigInteger('shop_id')->constrained('shops');
            $table->unsignedBigInteger('user_id')->constrained('users');
            $table->unsignedBigInteger('brand_id')->constrained('brands');
            $table->string('thumbnail')->nullable();
            $table->string('video_url')->nullable();
            $table->boolean('can_bargain')->default(false);
            $table->enum('product_type', config('enums.product_types'))->default('simple');
            $table->text('return_policy')->nullable();
            $table->text('warranty')->nullable();
            $table->text('guarantee')->nullable();
            $table->text('description')->nullable();
            $table->text('offers')->nullable();
            $table->text('tag')->nullable();
            $table->decimal('price', 8,2)->nullable()->default(0);
            $table->decimal('sale_price', 8,2)->nullable()->default(0);
            $table->string('currency_type')->nullable()->default(0);
            $table->integer('discount')->nullable()->default(0);
            $table->string('discount_type')->nullable()->default(0);
            $table->unsignedBigInteger('stocks')->nullable()->default(0);
            $table->unsignedBigInteger('total_stocks')->default(0);
            $table->integer('vat')->nullable()->default(0);
            $table->integer('alert')->nullable()->default(0);
            $table->text('delivery_offer')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('products');
    }
}
