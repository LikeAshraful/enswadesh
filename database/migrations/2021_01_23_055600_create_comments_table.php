<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->text('comment');
            $table->string('file')->nullable();
            $table->string('file_type')->nullable();
            $table->boolean('status')->default(1);
            $table->unsignedBigInteger('reply_id')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('interaction_id');
            $table->timestamps();

            $table->foreign('reply_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('interaction_id')->references('id')->on('interactions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
