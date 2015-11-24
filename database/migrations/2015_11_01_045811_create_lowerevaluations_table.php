<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLowerevaluationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lowerevaluations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Ministry');
            $table->string('Reyasat');
            $table->string('Moderyat');
            $table->string('Name');
            $table->string('LastName');
            $table->string('FatherName');
            $table->string('CurrentPositionDuration');
            $table->string('EvaluationType');
            $table->string('LastEvaluationDate');
            $table->string('LastEvaluationResult');
            $table->string('EmployeeType');
            $table->string('CurrentBast');
            $table->string('CurrentStep');
            $table->integer('GroupWork');
            $table->integer('RecieverSatisification');
            $table->integer('TechnicalInformation');
            $table->integer('TechnicalExperts');
            $table->integer('AcomplishmentQuality');
            $table->integer('WorkingWithPresure');
            $table->integer('SelfSecurity');
            $table->integer('SavingOthersSecurity');
            $table->integer('OtherSecurity');
            $table->integer('JobAvalibility');
            $table->integer('BehaviorRole');
            $table->integer('TotalOfScore');
            $table->integer('StanderdScore');
            $table->string('Categories');
            $table->string('EvaluationResult');
            $table->string('DirectManagerDesision');
            $table->integer('DirectManagerScore');
            $table->string('EvaluatoreComment');
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
        Schema::drop('lowerevaluations');
    }
}
