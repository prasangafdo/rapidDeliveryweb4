<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParcelUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parcel_users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parcel_id');
            $table->integer('sender_id');
            $table->integer('receiver_id');
            $table->foreign('sender_id')->references('id')->on('sender');//->onDelete('cascade') to remove fk
            $table->foreign('receiver_id')->references('id')->on('receiver');
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
        Schema::dropIfExists('parcel_users');
    }
}
