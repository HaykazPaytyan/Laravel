<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('user_name');
            $table->text('profile_description')->nullable();
            $table->string('profile_background')->nullable();
            $table->string('profile_image')->nullable();
            $table->string('profile_address')->nullable();
            $table->string('profile_telephone')->nullable();
            $table->string('profile_website')->nullable();
            $table->timestamps();

            $table->foreign('user_name')->references('name')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
