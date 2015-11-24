<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('password', 60);
            $table->string('email')->unique();
            $table->string('FatherName');
            $table->string('GrandFatherName');
            $table->string('DateOfBirth');
            $table->string('PlaceOfBirth');
            $table->string('TazkiraNumber');
            $table->string('FirstJobDate');
            $table->string('StatisticsCode');
            $table->string('Organization');
            $table->string('Reyasat');
            $table->string('JobTitle');
            $table->string('Bast');
            $table->string('Qadam');
            $table->string('RegistrationDate');
            $table->string('Position');
            $table->string('UniversityName');
            $table->string('Education Place');
            $table->string('EducationLevel');
            $table->string('EducationField');
            $table->string('StartDate');
            $table->string('EndDate');
            $table->string('VocationalStartDate');
            $table->string('VocationalEndDate');
            $table->string('OrgName');
            $table->string('Country');
            $table->string('VocationalEduField');
            $table->string('Result');
            $table->string('BookNumber');
            $table->string('LanguagesSkills');
            $table->string('JobSkills');
            $table->string('JobSkillLevel');
            $table->string('ExpOrgName');
            $table->string('ExpJobTitle');
            $table->string('ExpBast');
            $table->string('ExpQadam');
            $table->string('ExpJobPlace');
            $table->string('ExpStartDate');
            $table->string('ExpEndDate');
            $table->string('JobSummary');
            $table->string('EvlauationDate');
            $table->string('EvaluationType');
            $table->string('MainEvaluationScore');
            $table->string('EvaluationResult');
            $table->string('OrderNumber');
            $table->string('OrderDate');
            $table->string('Grade');
            $table->string('Assignment');
            $table->string('MakafatIteam');
            $table->string('Reason');
            $table->string('RelatedOfficial');
            $table->string('OrderPublishDate');
            $table->string('MakafatTypes');
            $table->string('PanishmentList');
            $table->string('PanishmentResone');
            $table->string('PanishmentRelatedOfficial');
            $table->string('PanishmentOrderDate');
            $table->string('PanishmentOrderCode');
            $table->string('PanishmentType');

            $table->rememberToken();
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
        Schema::drop('users');
    }
}
