<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBastsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('CodeNumber');
            $table->string('Title');
            $table->string('Type');
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
        Schema::drop('basts');
    }
}
