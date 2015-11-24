<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDarkhastiformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('darkhastiforms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('RegNo');
            $table->string('ReceivedDate');
            $table->string('EvaluationDate');
            $table->string('ShortlistDate');
            $table->string('InterviewDate');
            $table->string('RequestNumber');
            $table->string('Photo');
            $table->string('BastRequest');
            $table->string('Organization');
            $table->string('DirectorateOffice');
            $table->string('Name');
            $table->string('FatherName');
            $table->string('CurrentAddress');
            $table->string('Email')->nullable();
            $table->string('BirthDate');
            $table->string('Phone');
            $table->string('Gender');
            $table->string('UniversityName');
            $table->string('StartUniversityFrom');
            $table->string('EndUniversityAt');
            $table->string('Faculty');
            $table->string('Department');
            $table->string('UniversityGrade');
            $table->string('SchoolName');
            $table->string('StartSchoolFrom');
            $table->string('EndSchoolAt');
            $table->string('OtherTraining');
            $table->string('Experience');
            $table->string('JobTitle');
            $table->string('Bast');
            $table->string('Address');
            $table->string('Date');
            $table->string('Responsiblities');
            $table->string('Crime');
            $table->string('CrimeDetails');
            $table->string('ReferenceName');
            $table->string('ReferenceAdds');
            $table->string('ReferencePhone');
            $table->string('secondReferenceName');
            $table->string('secondReferenceAdds');
            $table->string('secondReferencePhone');
            $table->string('RelativesName');
            $table->string('PastJobDate');
            $table->string('EndPastJobDate');
            $table->string('EmployerName');
            $table->string('PastJobRes');
            $table->string('PastJobDateFrom');
            $table->string('PastJobDateEnd');
            $table->string('SecEmployerName');
            $table->string('EmployerResponsibility');
            $table->string('Dari');
            $table->string('DariWrittingLevel');
            $table->string('DariReadingLevel');
            $table->string('DariSpeakingLevel');
            $table->string('Pashto');
            $table->string('PashtoWrittingLevel');
            $table->string('PashtoReadingLevel');
            $table->string('PashtoSpeakingLevel');
            $table->string('English');
            $table->string('EnglishWrittingLevel');
            $table->string('EnglishReadingLevel');
            $table->string('EnglishSpeakingLevel');
            $table->string('MoreLanguage');
            $table->string('ComputerSkills');
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
        Schema::drop('darkhastiforms');
    }
}
