<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeminarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seminars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ReyastName');
            $table->string('idnumber');
            $table->string('Name');
            $table->string('FatherName');
            $table->string('Bast');
            $table->string('Score');
            $table->string('BastTitle');
            $table->string('Estehzari');
            $table->string('WorkshopDays');
            $table->string('Comment');
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
        Schema::drop('seminars');
    }
}
