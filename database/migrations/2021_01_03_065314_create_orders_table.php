<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_no')->nullable();
            $table->integer('customer_id')->nullable()->unsigned();
            $table->integer('total_quantity')->nullable();
            $table->float('total_discount', 8,2)->nullable();
            $table->float('total_vat', 8,2)->nullable();
            $table->float('total_price', 8,2)->nullable();
            $table->integer('order_status')->default(1);
            $table->text('order_note')->nullable();
            $table->string('shipping_email')->nullable();
            $table->string('shipping_name')->nullable();
            $table->string('shipping_address')->nullable();
            $table->string('shipping_city')->nullable();
            $table->string('shipping_phone')->nullable();
            $table->string('billing_email')->nullable();
            $table->string('billing_name')->nullable();
            $table->string('billing_address')->nullable();
            $table->string('billing_city')->nullable();
            $table->string('billing_phone')->nullable();
            $table->string('payment_gateway')->default('stripe');
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
        Schema::dropIfExists('orders');
    }
}