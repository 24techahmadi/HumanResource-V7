<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInterviewcommiteesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interviewcommitees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Name');
            $table->string('LastName');
            $table->string('Job');
            $table->string('CommiteePosition');
            $table->string('Email')->unique()->nullable();
            $table->string('Date');
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
        Schema::drop('interviewcommitees');
    }
}
