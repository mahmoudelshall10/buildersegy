<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNumbersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_numbers', function (Blueprint $table) {
            $table->increments('pkNumberID');
            $table->string('fldName');
            $table->integer('fldNumber');
            $table->unsignedInteger('fkCreatedByUserID');
            $table->foreign('fkCreatedByUserID')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('tbl_numbers');
    }
}
