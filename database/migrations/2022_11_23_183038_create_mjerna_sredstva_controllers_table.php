<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mjerna_sredstva', function (Blueprint $table) {
            $table->increments('id');
            $table->string('serijski_broj')->unique();
            $table->string('tip_ms');
            $table->string('vrsta_ms');
            $table->string('vrsta_kalibracije');
            $table->string('period_kalibracije');
            $table->string('lokacija_kalibracije');
            $table->string('lokacija');
            $table->string('proizvodjac');
            $table->integer('godina_proizvodnje');
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
        Schema::dropIfExists('mjerna_sredstva');
    }
};
