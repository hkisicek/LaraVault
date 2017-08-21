<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assett',function (Blueprint $table)
        {
           $table->increments('id');
           $table->string('type',20);
           $table->string('size',30);
           $table->string('public',1);
           $table->integer('user')->unsigned();
           $table->foreign('user')->references('id')->on('users');
           $table->integer('downloaded');
           $table->string('reference',50);
           $table->longText('description');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('asset');
    }
}
