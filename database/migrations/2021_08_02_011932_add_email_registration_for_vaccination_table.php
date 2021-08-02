<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEmailRegistrationForVaccinationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    //
	    Schema::table('registration_for_vaccination', function($t){
	    	$t->string('email');
	    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
	    Schema::table('registration_for_vaccination', function($t){
	    	$t->dropColumn('email');
	    });
    }
}
