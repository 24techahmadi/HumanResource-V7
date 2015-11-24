<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExecutionplanasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('executionplanas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('DateOflastEvaluation');
            $table->string('Number');
            $table->string('org');
            $table->string('DateOflastinEvaluation');
            $table->string('NewDepartmentsInOldFacultays');
            $table->string('DepartmentsName');
            $table->string('Teacher');
            $table->string('Labraint');
            $table->string('Head');
            $table->string('GeneralTeachingManager');
            $table->string('TeachingMamor');
            $table->string('LibraryManager');
            $table->string('Technation');
            $table->string('DepartmentsMagazinsManager');
            $table->string('ServiceWorker');
            $table->string('Gard');
            $table->string('MotamedJensee');
            $table->string('Totale');
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
        Schema::drop('executionplanas');
    }
}
