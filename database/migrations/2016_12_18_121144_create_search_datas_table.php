<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSearchDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('search_datas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('depart_city');
            $table->string('arrive_city');
            $table->date('depart_date');
            $table->date('return_date');
            $table->integer('adult');
            $table->integer('child');
            $table->integer('infent');
            $table->integer('token');
            $table->integer('ver');
            $table->string('result');
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
        Schema::drop('search_datas');
    }
}
