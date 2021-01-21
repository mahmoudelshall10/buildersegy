<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_teams', function (Blueprint $table) {
            $table->increments('pkTeamID');
            $table->string('fldName');
            $table->string('fldJobTitle');
            $table->string('fldPhoto');
            $table->string('fldQuote');
            $table->string('fldFacebook');
            $table->string('fldLinkedIn');
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
        Schema::dropIfExists('tbl_teams');
    }
}
