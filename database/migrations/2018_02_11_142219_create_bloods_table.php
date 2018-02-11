<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBloodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bloods', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('doner_id')->references('id')->on('donates');
            $table->integer('assured');
            $table->float('hymoglobin',20,0);
            $table->float('rbc',20,0);
            $table->float('wbc',20,0);
            $table->float('patelets',20,0);
            $table->integer('hiv');
            $table->integer('place_id')->references('id')->on('places');
            $table->integer('loc_id')->references('id')->on('locations');
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
        Schema::dropIfExists('bloods');
    }
}
