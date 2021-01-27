<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->text('address')             ->nullable();
            $table->text('bio')                 ->nullable();
            $table->longText('social_link')     ->nullable();
            $table->string('image')             ->nullable();
            $table->boolean('user_type')        ->default(0);
            $table->string('nid')               ->nullable();
            $table->string('passport_id')       ->nullable();
            $table->string('driving_license')   ->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
