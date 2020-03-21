<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPhoneblockscolumnsToPhoneusers extends Migration
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
            $table->string('network')->after('phonetype3');
            $table->boolean('blockstatus2')->after('blockstatus');
            $table->boolean('blockstatus3')->after('blockstatus2');
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
