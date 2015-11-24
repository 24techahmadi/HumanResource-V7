<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListcondidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listcondidates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('CodeNumber');
            $table->string('Date');
            $table->string('JobTitle');
            $table->string('Department');
            $table->string('Presedential');
            $table->string('Ministry');
            $table->string('AnnouncementDate');
            $table->string('EmpId');
            $table->string('Name');
            $table->string('FatherName');
            $table->string('LastName');
            $table->string('DistributionDate');
            $table->string('ReceiveDate');
            $table->string('LastAcceptanceDate');
            $table->string('Shortlist');
            $table->string('InterviewDate');
            $table->string('InterviewScore');
            $table->string('Selection');
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
        Schema::drop('listcondidates');
    }
}
