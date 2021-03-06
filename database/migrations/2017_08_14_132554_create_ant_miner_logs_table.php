<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAntMinerLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ant_miner_logs', function (Blueprint $table) {
	        $table->increments('id');

	        $table->integer('ant_miner_id')->unsigned();

	        $table->integer('temp1')->unsigned();
	        $table->integer('temp11')->unsigned()->nullable();
	        $table->integer('temp2')->unsigned();
	        $table->integer('temp21')->unsigned()->nullable();
	        $table->integer('temp3')->unsigned();
	        $table->integer('temp31')->unsigned()->nullable();

	        $table->integer('freq1')->unsigned();
	        $table->integer('freq2')->unsigned();
	        $table->integer('freq3')->unsigned();

	        $table->integer('hr')->unsigned();

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
        Schema::dropIfExists('ant_miner_logs');
    }
}
