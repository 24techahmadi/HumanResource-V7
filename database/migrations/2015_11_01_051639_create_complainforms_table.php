<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComplainformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complainforms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Name');
            $table->string('FatherName');
            $table->string('LastName');
            $table->string('Province');
            $table->string('District');
            $table->string('Village');
            $table->string('EducationLevel');
            $table->string('EducationPlace');
            $table->string('HaveJob');
            $table->string('TargetBast');
            $table->string('ComplainedOffice');
            $table->string('Bast');
            $table->string('PlaceOfJob');
            $table->string('ComplainedTitle');
            $table->string('RelatedOffice');
            $table->string('ComplaindPossition');
            $table->string('ComplainedOfficeAdds');
            $table->string('ComplainObjectives');
            $table->string('NotShortlistedDate');
            $table->string('ExaminationDate');
            $table->string('ResultAnnouncmentDate');
            $table->string('ExaminationType');
            $table->string('MyComplians');
            $table->string('ComplainsID');
            $table->string('ComplainsDocs');
            $table->string('ComplainsDetail');
            $table->string('ComplainerSignatureDate');
            $table->string('BoardSignatureDate');
            $table->string('ExecutionSignatureDate');
            $table->string('EvaluationSignatureDate');
            $table->string('ResponsibleTeams');
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
        Schema::drop('complainforms');
    }
}
