<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTheRemainderOfTheVaccineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('the_remainder_of_the_vaccine', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('hospitalId');
            $table->integer('typeOfVaccineId');
            $table->integer('count');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('the_remainder_of_the_vaccine');
    }
}
