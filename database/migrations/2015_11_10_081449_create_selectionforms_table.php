<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSelectionformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('selectionforms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Position');
            $table->string('JobTitle');
            $table->string('Reyasat');
            $table->string('Question1');
            $table->string('Question1Comments');
            $table->string('Question2');
            $table->string('Question2Comments');
            $table->string('Question3');
            $table->string('Question3Comments');
            $table->string('Question4');
            $table->string('Question4Comments');
            $table->string('Question5');
            $table->string('Question5Comments');
            $table->string('Question6');
            $table->string('Question6Comments');
            $table->integer('RealScore');
            $table->integer('PossibleScore');
            $table->integer('Comments');
            $table->integer('TotleScore');
            $table->string('CommiteeBossName');
            $table->string('OrgRepresentativeName');
            $table->string('GenderRepresentativeName');
            $table->string('CriticName');
            $table->string('ClerckName');
            $table->string('Date');
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
        Schema::drop('selectionforms');
    }
}
