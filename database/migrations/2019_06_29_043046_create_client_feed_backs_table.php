<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientFeedBacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_client_feed_backs', function (Blueprint $table) {
            $table->increments('pkClientFeedBackID');
            $table->string('fldFeedBack');
            $table->string('fldName');
            $table->string('fldJobTitle');
            $table->string('fldPhoto');
            $table->tinyInteger('fldStatus')->default(0);
            $table->unsignedInteger('fkCreatedByUserID');
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
        Schema::dropIfExists('tbl_client_feed_backs');
    }
}
