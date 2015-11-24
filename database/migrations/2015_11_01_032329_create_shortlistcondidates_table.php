<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShortlistcondidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shortlistcondidates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('AnnouncementDate');
            $table->string('EndDate');
            $table->string('ReannouncementDate');
            $table->string('ReannouncementEndDate');
            $table->string('Ministry');
            $table->string('Reyasat');
            $table->string('Bast');
            $table->string('IDNumber');
            $table->string('Name');
            $table->string('LastName');
            $table->string('FatherName');
            $table->string('EducationLevel');
            $table->string('Email');
            $table->string('Phone');
            $table->string('ExpWorkRelated');
            $table->string('GenrelExp');
            $table->string('Dari');
            $table->string('Pashto');
            $table->string('English');
            $table->string('MoreLanguage');
            $table->string('MoreLanguageNames');
            $table->string('Windows');
            $table->string('Office');
            $table->string('Networking');
            $table->string('MoreOnComputers');
            $table->string('MoreOnComputersDetails');
            $table->string('GoodManagement');
            $table->string('bodyLanguage');
            $table->string('GoodCommunication');
            $table->string('OtherSkills');
            $table->string('OtherSkillsDetails');
            $table->string('Rules');
            $table->string('Result');
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
        Schema::drop('shortlistcondidates');
    }
}
