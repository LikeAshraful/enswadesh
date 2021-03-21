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
            $table->text('address')             ->nullable();
            $table->text('bio')                 ->nullable();
            $table->date('dob')                 ->nullable();
            $table->string('blood_group')       ->nullable();
            $table->longText('social_link')     ->nullable();
            $table->string('image')             ->nullable();
            $table->boolean('user_type')        ->default(0);
            $table->string('nid')               ->nullable();
            $table->string('passport_id')       ->nullable();
            $table->string('driving_license')   ->nullable();
            $table->foreignId('user_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}