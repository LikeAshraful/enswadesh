<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brands', function (Blueprint $table) {
            $table->id();
            $table->string('name')              ->index()->unique();
            $table->string('description')       ->nullable();
            $table->string('slug')              ->index();
            $table->string('icon')              ->nullable();
            $table->unsignedBigInteger('user_id')->constrained('users');
            $table->unsignedBigInteger('shop_id')->constrained('shops');
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
        Schema::dropIfExists('brands');
    }
}