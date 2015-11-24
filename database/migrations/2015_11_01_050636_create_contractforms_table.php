<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContractformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contractforms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('IDNumber');
            $table->string('TaeenatRegNo');
            $table->string('CardNo');
            $table->string('OfficeName');
            $table->string('Lawshep');
            $table->string('WorkHead');
            $table->string('Officephone');
            $table->string('photo');
            $table->string('Name');
            $table->string('FatherName');
            $table->string('BirthDate');
            $table->string('TazkiraNo');
            $table->string('Gender');
            $table->string('MarritalStatuse');
            $table->string('Radef');
            $table->string('Proffisinal');
            $table->string('EducationLevel');
            $table->string('EducationField');
            $table->string('Educationplace');
            $table->string('Healthinfo');
            $table->string('Pastworkjustfi');
            $table->string('PermenantAdd');
            $table->string('CurrentAdd');
            $table->string('WorkType');
            $table->string('Workplace');
            $table->string('Position');
            $table->string('SpasificContract');
            $table->string('UnSpasificContract');
            $table->string('UnSpasificContractFrom');
            $table->string('UnSpasificContractTo');
            $table->string('SpecificWorks');
            $table->string('TestPeriod');
            $table->string('TestPeriodFrom');
            $table->string('TestPeriodFromTo');
            $table->string('Perhour');
            $table->string('Makol');
            $table->string('Copon');
            $table->string('Clothworkequp');
            $table->string('TrnspTashelat');
            $table->string('healthInsurrence');
            $table->string('OtherTadiat');
            $table->string('RepName');
            $table->string('RepLastName');
            $table->string('RepfName');
            $table->string('RepRelatio');
            $table->string('Sokoknumber');
            $table->string('RegNumber');
            $table->string('PageNo');
            $table->string('JuldNo');
            $table->string('Sudorplace');
            $table->string('PermenantAddress');
            $table->string('CurrentAddress');
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
        Schema::drop('contractforms');
    }
}
