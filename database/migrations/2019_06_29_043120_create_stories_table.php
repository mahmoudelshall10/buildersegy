<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_stories', function (Blueprint $table) {
            $table->increments('pkStoryID');
            $table->string('fldName');
            $table->string('fldPhoto');
            $table->string('fldText');
            $table->string('fldAddress');
            $table->date('fldDate');
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
        Schema::dropIfExists('tbl_stories');
    }
}
