<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ExtraColumnsToPhoneusers extends Migration
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
            $table->integer('nin')->after('momname');
            $table->integer('puk')->after('nin');
            $table->string('simno')->after('puk');
            $table->string('phonetype1')->after('simno');
            $table->string('phonetype2')->after('phonetype1');
            $table->string('phonetype3')->after('phonetype2');
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
