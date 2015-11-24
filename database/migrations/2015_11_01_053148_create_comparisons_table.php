<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComparisonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comparisons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Title');
            $table->integer('Year');
            $table->string('Bast');
            $table->string('Amount');
            $table->string('BastIncrease');
            $table->string('BastDecrease');
            $table->integer('RoleForYearOf');
            $table->string('ToBast');
            $table->string('NewAmount');
            $table->string('NewCode');
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
        Schema::drop('comparisons');
    }
}
