<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSymsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('syms', function (Blueprint $table) {
            $table->id();
            $table->string('type_name', 191)->unique();
            $table->unsignedBigInteger('type_id');
            $table->timestamps();

            $table->foreign('type_id')
                ->references('id')->on('types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('syms');
    }
}
