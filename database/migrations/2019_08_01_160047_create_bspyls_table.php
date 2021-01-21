<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBspylsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_bspyls', function (Blueprint $table) {
            $table->increments('pkBspylID');
            $table->string('fldName');
            $table->string('fldEmail')->unique();
            $table->smallInteger('fldAge')->unsigned();
            $table->string('fldUniversity');
            $table->string('fldFaculty');
            $table->integer('fldPhone')->unique();
            $table->string('fldGovernment');
            $table->string('fldSuggestion')->nullable();
            $table->string('fldQuestion1')->nullable();
            $table->string('fldQuestion2')->nullable();
            $table->integer('fldQuestion3');
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
        Schema::dropIfExists('tbl_bspyls');
    }
}
