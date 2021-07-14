<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDianosesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dianoses', function (Blueprint $table) {
            $table->id();
            $table->string('CustID', 20);
            $table->string('cust_name', 191)->unique();
            $table->string('symptom');
            $table->string('cust_dob');
            $table->string('cust_gender');
            $table->string('phone', 11);
            $table->string('cust_email')->unique();
            $table->longText('cust_address');
            $table->string('time_sym')->nullable;
            $table->string('result')->nullable;
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
        Schema::dropIfExists('dianoses');
    }
}
