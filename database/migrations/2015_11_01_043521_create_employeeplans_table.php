<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeplansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employeeplans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('DateOfPlan');
            $table->string('RelatedTo');
            $table->string('Ameryat');
            $table->string('JustfierName');
            $table->string('Nationalstrategy');
            $table->string('DepartmentStrategy');
            $table->string('PlanPurpose');
            $table->string('NeededActivities');
            $table->string('Accomplisher');
            $table->string('Resources');
            $table->string('AccomplishmentPlace');
            $table->string('AcomplishmentDate');
            $table->text('Results');
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
        Schema::drop('employeeplans');
    }
}
