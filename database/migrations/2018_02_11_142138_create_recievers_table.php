<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecieversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recievers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('blood_groop');
            $table->float('phone',15,0);
            $table->string('email')->unique();
            $table->integer('age');
            $table->integer('amount');
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
        Schema::dropIfExists('recievers');
    }
}
