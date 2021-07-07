<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationForVaccinationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registration_for_vaccination', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('fio');
            $table->string('tel');
            $table->integer('vaccinationTypeId');
            $table->integer('hospitalId');
            $table->date('dateOfVaccination');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registration_for_vaccination');
    }
}
