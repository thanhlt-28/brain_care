<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTreatmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treatments', function (Blueprint $table) {
            $table->id();
            $table->string('CustID', 20);
            $table->string('treat_name', 191)->unique();
            $table->string('symptom')->nullable(true);
            $table->string('treat_dob');
            $table->string('treat_gender');
            $table->string('treat_phone', 11);
            $table->string('treat_email')->unique();
            $table->longText('treat_address');
            $table->string('sym_time')->nullable;
            $table->string('result')->nullable;
            $table->string('medicine_once')->nullable;
            $table->string('medicine_twice')->nullable;
            $table->string('medicine_three')->nullable;
            $table->string('medicine_fourth')->nullable;
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
        Schema::dropIfExists('treatments');
    }
}
