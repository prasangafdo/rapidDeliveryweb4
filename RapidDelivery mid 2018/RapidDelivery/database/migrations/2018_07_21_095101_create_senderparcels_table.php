<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSenderparcelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('senderparcels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sender_id');
            $table->string('parcel_id');
            $table->timestamps();
        });//Edit this and replace with sender_parcels
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('senderparcels');
    }
}
