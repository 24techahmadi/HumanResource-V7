<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('DocumentType');
            $table->string('CodeNumber');
            $table->string('Date');
            $table->string('Income');
            $table->string('Title');
            $table->string('MinistryComment');
            $table->string('AccomplishmentComment');
            $table->string('FutureAccomplishment');
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
        Schema::drop('orders');
    }
}
