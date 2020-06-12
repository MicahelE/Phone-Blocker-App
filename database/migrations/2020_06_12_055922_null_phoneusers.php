<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NullPhoneusers extends Migration
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
            $table->string('midname')->nullable()->change();
            $table->string('email')->nullable()->change();
            $table->string('gender')->nullable()->change();
            $table->string('city')->nullable()->change();
            $table->string('state')->nullable()->change();
            $table->string('linetype1')->nullable()->change();
            $table->string('phonenumber2')->nullable()->change();
            $table->string('network2')->nullable()->change();
            $table->string('linetype2')->nullable()->change();
            $table->string('imei2')->nullable()->change();
            $table->string('phonenumber3')->nullable()->change();
            $table->string('network3')->nullable()->change();
            $table->string('linetype3')->nullable()->change();
            $table->string('imei3')->nullable()->change();
            $table->string('phonenumber4')->nullable()->change();
            $table->string('network4')->nullable()->change();
            $table->string('linetype4')->nullable()->change();
            $table->string('phonetype4')->nullable()->change();
            $table->string('imei4')->nullable()->change();
            $table->boolean('blockstatus4')->nullable()->change();
            $table->string('network')->nullable()->change();
            $table->string('nin')->nullable()->change();
            $table->string('puk')->nullable()->change();

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
