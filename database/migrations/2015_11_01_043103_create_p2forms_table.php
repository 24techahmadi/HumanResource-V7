<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateP2formsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('p2forms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ExecutionNumber');
            $table->string('Name');
            $table->string('FatherName');
            $table->string('EmployeeNumber');
            $table->string('ImplementationDate');
            $table->string('ImplementationType');
            $table->string('AnotherExecutionType');
            $table->string('Duty');
            $table->string('Bast');
            $table->string('DutySalaryPosition');
            $table->string('DutyOffice');
            $table->string('DutyDepartment');
            $table->text('DutyAddress');
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
        Schema::drop('p2forms');
    }
}
