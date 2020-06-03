<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewColumnsToPhoneusers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('phoneusers', function (Blueprint $table) {
            //
            $table->string('midname');
            $table->string('email');
            $table->string('gender');
            $table->string('city');
            $table->string('state');
            $table->string('linetype1');
            $table->string('phonenumber2');
            $table->string('network2');
            $table->string('linetype2');
            $table->string('imei2');
            $table->string('phonenumber3');
            $table->string('network3');
            $table->string('linetype3');
            $table->string('imei3');
            $table->string('phonenumber4');
            $table->string('network4');
            $table->string('linetype4');
            $table->string('phonetype4');
            $table->string('imei4');
            $table->boolean('blockstatus4');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('phoneusers', function (Blueprint $table) {
            //
        });
    }
}
