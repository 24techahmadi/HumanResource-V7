<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpreportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empreports', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Date');
            $table->string('To');
            $table->string('Reporter');
            $table->string('Purpouses');
            $table->string('ManagementField');
            $table->string('FinanceField');
            $table->string('EnglishLanguageField');
            $table->string('leadershipDevelopmentField');
            $table->string('TypsOfActivitiesDone');
            $table->string('LearningActivitiesField');
            $table->string('ITField');
            $table->string('OrganizationField');
            $table->string('Acheavments');
            $table->string('ErrorsInActivities');
            $table->string('ProblemsOfActitvities');
            $table->string('ProventersOfJobDone');
            $table->string('ReportPrapretioner');
            $table->string('PreparDate');
            $table->string('ReportJustfiers');
            $table->string('JustifierDate');
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
        Schema::drop('empreports');
    }
}
