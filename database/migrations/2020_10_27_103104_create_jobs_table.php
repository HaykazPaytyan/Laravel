<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('user_name');
            $table->string('job_name')->unique();
            $table->string('job_title');
            $table->string('job_region');
            $table->string('job_status');
            $table->string('job_experience_1');
            $table->string('job_sallary');
            $table->date('job_deadline');
            $table->text('job_description');
            $table->text('job_responsibilities');
            $table->text('job_experience_2');
            $table->text('job_benefit');
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
        Schema::dropIfExists('jobs');
    }
}
