<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('role_id');
            $table->string('name');
            $table->string('phone_number')              ->unique();
            $table->string('email')                     ->unique();
            $table->timestamp('email_verified_at')      ->nullable();
            $table->string('password')                  ->nullable();
            $table->string('image')                     ->nullable();
            $table->boolean('status')                   ->default(false);
            $table->boolean('suspend')                  ->default(false);
            $table->rememberToken();
            $table->timestamp('last_login_at')          ->nullable();
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
        Schema::dropIfExists('users');
    }
}