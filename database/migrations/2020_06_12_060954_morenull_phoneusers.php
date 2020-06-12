<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MorenullPhoneusers extends Migration
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
            $table->string('phonetype3')->nullable()->change();
           
            $table->boolean('blockstatus3')->nullable()->change();
            $table->string('phonetype2')->nullable()->change();
           
            $table->boolean('blockstatus2')->nullable()->change();
            $table->string('phonetype1')->nullable()->change();
           
            $table->boolean('blockstatus')->nullable()->change();
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
