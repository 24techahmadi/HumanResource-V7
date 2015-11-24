<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeathformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deathforms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('AutoNumber');
            $table->string('RegistrationDate');
            $table->string('CardNo');
            $table->string('Name');
            $table->string('LastName');
            $table->string('FatherName');
            $table->string('GrandfatherName');
            $table->string('TazkeraNumber');
            $table->string('TazkeraPage');
            $table->string('TazkeraJuld');
            $table->string('ReasonType');
            $table->string('InjuredLevel');
            $table->string('CausedAccordingTo');
            $table->string('CausedForFistTime');
            $table->string('DeathDate');
            $table->string('InjuredDetails');
            $table->string('ProveFormInfoNo');
            $table->string('WaseqeFawtiNo');
            $table->string('WaseqaKhatDate');
            $table->string('WasyatKhatNo');
            $table->string('WasyatKhatDate');
            $table->string('MyProveDate');
            $table->string('RelatedworkInjured');
            $table->string('RelatedInjuredDate');
            $table->string('EmpNameOfHR');
            $table->string('BossNameOfHR');
            $table->string('CurrentDate');
            $table->string('RegNumber');
            $table->string('ExportNumber');
            $table->string('FormNumber');
            $table->string('RecieveDocumentation');
            $table->string('Justification');
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
        Schema::drop('deathforms');
    }
}
