<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUadsusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*Schema::create('uadsusers', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
        });*/

        Schema::create('passports', function (Blueprint $table) {
            $table->increments('id');
            $table->string('login')->unique();
            $table->string('name');
            // $table->integer('date');
            $table->string('email')->unique();
            $passpword->string('password');
            $role->string('role');
            // $table->integer('number');
            // $table->string('office');
            // $table->string('filename');
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
        Schema::dropIfExists('uadsusers');
    }
}
