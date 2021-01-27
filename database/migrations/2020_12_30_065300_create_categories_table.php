<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name')->index()->unique();
            $table->string('slug')->index();
            $table->string('description')->nullable();
            $table->string('icon')->nullable();
            $table->string('thumbnail')->nullable();
            $table->enum('type', ['base', 'custom'])->default('base');
            $table->unsignedBigInteger('user_id')->constrained('users');
            $table->boolean('status')->default(true);
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
