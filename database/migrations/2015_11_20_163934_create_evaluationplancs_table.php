<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvaluationplancsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluationplancs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('DateOflastEvaluation');
            $table->string('Number');
            $table->string('org');
            $table->string('Edary');
            $table->string('Dormatory');
            $table->string('Haspital');
            $table->string('Totle');
            $table->string('Edarysecond');
            $table->string('Dormatorysecond');
            $table->string('Haspitalsecond');
            $table->string('Totalsecond');
            $table->string('TotaleofTotle');
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
        Schema::drop('evaluationplancs');
    }
}
