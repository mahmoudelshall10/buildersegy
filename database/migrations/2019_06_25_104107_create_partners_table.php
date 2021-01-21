<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_partners', function (Blueprint $table) {
            $table->increments('pkPartnerID');
            $table->string('fldName');
            $table->string('fldPhoto');
            $table->enum('fldType', ['Partner', 'Sponsor']);
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
        Schema::dropIfExists('tbl_partners');
    }
}
