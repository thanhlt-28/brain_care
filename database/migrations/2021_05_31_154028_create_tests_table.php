<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->string('cust_name', 191)->unique();
            $table->string('symptom')->nullable(true);
            $table->string('cust_dob');
            $table->string('cust_gender');
            $table->string('phone', 11);
            $table->string('cust_email')->unique();
            $table->longText('cust_address');
            $table->boolean('cust_status')->default(0);
            $table->string('time_sym');
            $table->string('result');
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
        Schema::dropIfExists('tests');
    }
}
