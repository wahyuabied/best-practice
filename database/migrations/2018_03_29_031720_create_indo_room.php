<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndoRoom extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indo_rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('hotel_id');
            $table->string('name');
            $table->string('code');
            $table->double('basic_price');
            $table->text('descriptions');
            $table->boolean('available');
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
        Schema::drop('indo_rooms');
    }
}
