<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUpperevaluationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('upperevaluations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Name');
            $table->string('FatherName');
            $table->string('GrandFatherName');
            $table->string('BirthDate');
            $table->string('EducationLevel');
            $table->string('EucationField');
            $table->string('PrimaryRegDate');
            $table->string('CompetitionRegDate');
            $table->integer('Qadam');
            $table->integer('Bast');
            $table->string('BastTitle');
            $table->string('Ministry');
            $table->string('Reysat');
            $table->string('Moderiat');
            $table->string('QadamPayment');
            $table->integer('SalaryTotal');
            $table->string('Responsibility');
            $table->string('AccomplishmentType');
            $table->text('WorkPlane');
            $table->string('AnnualAccomplishmentType');
            $table->string('OfficialEvaluationResult');
            $table->string('DirectManagerEvaluationResult');
            $table->string('HeadManagerEvaluationResult');
            $table->integer('TotalOfScore');
            $table->string('OfficialsResult');
            $table->string('OfficialName');
            $table->string('OfficialDate');
            $table->string('DirectManager');
            $table->integer('YearlyWorkplanScore');
            $table->integer('AdditionalRuleScore');
            $table->integer('BothSectionTotalScore');
            $table->string('FinalEvaluationResult');
            $table->string('OfficialSatisfaction');
            $table->string('DirecteManagerAcceptance');
            $table->string('HeadManagerName');
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
        Schema::drop('upperevaluations');
    }
}
