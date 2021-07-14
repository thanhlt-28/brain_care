<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prescription', function (Blueprint $table) {
            $table->id();
            $table->string('Pre_ID', 20);
            $table->string('CustID', 20);
            $table->string('Name', 200);
            $table->bigInteger('Amount');
            $table->string('Type', 200)->nullable();
            $table->string('Grouptype', 200)->nullable();
            $table->string('Market', 200)->nullable();
            $table->string('Begin', 200)->nullable();
            $table->string('Treatment', 200)->nullable();
            $table->string('Company', 200)->nullable();
            $table->string('National', 200)->nullable();
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
        Schema::dropIfExists('prescription');
    }
}
