<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRetiredformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('retiredforms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('AutoNumber');
            $table->string('Validate');
            $table->string('OrignalNo');
            $table->string('Date');
            $table->string('OrgCode');
            $table->string('OrgName');
            $table->string('Reyasat');
            $table->string('Province');
            $table->string('Photo');
            $table->string('EmpCardNo');
            $table->string('Rutba');
            $table->string('EmpName');
            $table->string('LastName');
            $table->string('FatherName');
            $table->string('GrandfatherName');
            $table->string('TazkeraNo');
            $table->string('Juld');
            $table->string('Page');
            $table->string('BirthDate');
            $table->string('Gender');
            $table->string('RepresentiativePhoto');
            $table->string('RepRelation');
            $table->string('RepName');
            $table->string('RepLastName');
            $table->string('RepFatherName');
            $table->string('RepGrandfatherName');
            $table->string('RepTazkeraNumber');
            $table->string('RepTazkeraJuld');
            $table->string('RepTazkeraPage');
            $table->string('RepBirthDate');
            $table->string('RepGender');
            $table->string('RepKhatNo');
            $table->string('RequesterCurrentAddress');
            $table->string('ReqDestrict');
            $table->string('ReqProvince');
            $table->string('ReqPhone');
            $table->string('SimpleLanguage');
            $table->string('Moqarara');
            $table->string('OtherDocumentation');
            $table->string('RetiredType');
            $table->string('RetiredDate');
            $table->string('RetiredNumber');
            $table->string('LikeToRetired');
            $table->string('IfyesdDate');
            $table->string('SurviverName');
            $table->string('SurLastName');
            $table->string('SurFatherName');
            $table->string('SurRelation');
            $table->string('SurAge');
            $table->string('SurStatues');
            $table->string('JusName');
            $table->string('JusWorkName');
            $table->string('JusprofisionalkName');
            $table->string('JusheadkName');
            $table->string('DocDate');
            $table->string('DocCodeNumber');
            $table->string('DocExportNumber');
            $table->string('HRF04Number');
            $table->string('HRF05Number');
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
        Schema::drop('retiredforms');
    }
}
