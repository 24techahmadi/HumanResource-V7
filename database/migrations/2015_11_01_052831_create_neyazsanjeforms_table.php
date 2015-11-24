<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNeyazsanjeformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('neyazsanjeforms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Name');
            $table->string('FatherName');
            $table->string('EducationLevel');
            $table->string('University');
            $table->string('CurrentJob');
            $table->string('Experience');
            $table->string('Reyasat');
            $table->string('Province');
            $table->string('Phone');
            $table->string('q1');
            $table->string('q2');
            $table->string('q3');
            $table->string('q4');
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
        Schema::drop('neyazsanjeforms');
    }
}
