<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmptybastsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emptybasts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Name');
            $table->string('Bast');
            $table->string('Office');
            $table->string('AnnouncementStartDate');
            $table->string('AnnouncementEndDate');
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
        Schema::drop('emptybasts');
    }
}
