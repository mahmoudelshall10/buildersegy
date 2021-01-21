<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsultanciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_consultancies', function (Blueprint $table) {
            $table->increments('pkConsultancyID');
            $table->string('fldName');
            $table->string('fldSubject');
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
        Schema::dropIfExists('tbl_consultancies');
    }
}
