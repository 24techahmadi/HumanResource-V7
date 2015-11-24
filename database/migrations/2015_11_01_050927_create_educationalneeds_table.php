<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationalneedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('educationalneeds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Name');
            $table->string('LastName');
            $table->string('FatherName');
            $table->string('BirthDate');
            $table->string('PermenantAddress');
            $table->string('CurrentAddress');
            $table->string('MarritalStatues');
            $table->integer('TazkeraNumber');
            $table->integer('Phone');
            $table->string('BastTitle');
            $table->string('EducationLevel');
            $table->string('EducationalField');
            $table->string('University');
            $table->string('Bast');
            $table->integer('BastStep');
            $table->string('Experience');
            $table->string('Ministry');
            $table->string('Reyasat');
            $table->string('PeriodsName');
            $table->string('Details');
            $table->string('PeriodsDuration');
            $table->string('Preprationer');
            $table->string('EnglishWrittingLevel');
            $table->string('EnglishReadingLevel');
            $table->string('EnglishSpeakingLevel');
            $table->string('ComputerSkills');
            $table->string('ComputerSkillsLevel');
            $table->string('HumanLaws');
            $table->string('HumanLawsLevel');
            $table->string('Regulations');
            $table->string('RegulationsLevel');
            $table->string('Rules');
            $table->string('RulesLevel');
            $table->string('Directions');
            $table->string('DirectionsLevel');
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
        Schema::drop('educationalneeds');
    }
}
